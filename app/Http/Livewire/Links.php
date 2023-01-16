<?php

namespace App\Http\Livewire;

use App\Models\Link;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Links extends Component
{
    use WireToast;

    public $url, $label, $link_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $links = Link::all();

        return view('admin.links', compact('links'))->layout('layouts.app');
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
        $this->link_id = '';
        $this->url = '';
        $this->label = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'url' => 'required|active_url',
            'label' => 'required',
        ]);

        Link::updateOrCreate(['id' => $this->link_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();

        if($this->link_id == '') {
            toast()->success('Lien ajouté !')->push();
        } else {
            toast()->success('Lien modifié !')->push();
        }
    }

    public function edit($id)
    {
        $link = Link::findOrFail($id);

        $this->link_id = $id;
        $this->url = $link->url;
        $this->label = $link->label;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Link::find($id)->delete();

        $this->closeModal();

        toast()->success('Lien supprimé')->push();
    }
}
