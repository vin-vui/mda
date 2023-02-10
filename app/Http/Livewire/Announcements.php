<?php

namespace App\Http\Livewire;

use App\Models\Announcement;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Carbon\Carbon;

class Announcements extends Component
{
    use WireToast;

    public $title, $description, $display, $announcement_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $announcements = Announcement::latest()->get();

        return view('admin.announcements', compact('announcements'))->layout('layouts.app');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->announcement_id = '';
        $this->title = '';
        $this->description = '';
        $this->display = false;
    }

    public function store()
    {
        $dataValid = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'display' => 'nullable',
        ]);

        if ($this->announcement_id == '') {
            toast()->success('Annonce ajoutée !')->push();
        } else {
            toast()->success('Annonce modifiée !')->push();
        }

        Announcement::updateOrCreate(['id' => $this->announcement_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);

        $this->announcement_id = $id;
        $this->title = $announcement->title;
        $this->description = $announcement->description;
        $this->display = $announcement->display;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Announcement::find($id)->delete();

        $this->closeModal();

        toast()->success('Annonce supprimée')->push();
    }

    public function changeDisplay()
    {
        $this->display = !$this->display;
    }
}
