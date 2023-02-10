<?php

namespace App\Http\Livewire;

use App\Models\Seminar;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Seminars extends Component
{
    use WireToast;
    use WithFileUploads;

    public $date, $image, $title, $description, $display, $tag, $seminar_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $seminars = Seminar::latest()->get();

        return view('admin.seminars', compact('seminars'))->layout('layouts.app');
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
        $this->seminar_id = '';
        $this->date = '';
        $this->image = '';
        $this->title = '';
        $this->description = '';
        $this->display = false;
        $this->tag = '';
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'date' => 'required',
            'image' => 'nullable',
            'title' => 'required',
            'description' => 'required',
            'display' => 'nullable',
            'tag' => 'required',
        ]);

        if ($this->seminar_id != '') {
            $seminar = Seminar::find($this->seminar_id);
            if ($this->image != $seminar->image) {
                $save_image = true;
            }
        } else {
            $save_image = true;
        }

        if ($save_image) {
            $dataValid['image'] = Storage::disk('uploads')->put('/', $this->image);
        }

        if ($this->seminar_id == '') {
            toast()->success('Actu/Atelier ajouté !')->push();
        } else {
            toast()->success('Actu/Atelier modifié !')->push();
        }

        Seminar::updateOrCreate(['id' => $this->seminar_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $seminar = Seminar::findOrFail($id);

        $this->seminar_id = $id;
        $this->date = $seminar->date;
        $this->image = $seminar->image;
        $this->title = $seminar->title;
        $this->description = $seminar->description;
        $this->display = $seminar->display;
        $this->tag = $seminar->tag;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Seminar::find($id)->delete();

        $this->closeModal();

        toast()->success('Actu/Atelier supprimé')->push();
    }

    public function changeDisplay()
    {
        $this->display = !$this->display;
    }
}
