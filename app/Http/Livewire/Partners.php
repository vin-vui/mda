<?php

namespace App\Http\Livewire;

use App\Models\Partner;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Partners extends Component
{
    use WireToast;
    use WithFileUploads;

    public $url, $label, $partner_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $partners = Partner::all();

        return view('admin.partners', compact('partners'))->layout('layouts.app');
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
        $this->partner_id = '';
        $this->url = '';
        $this->label = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'url' => 'required|image',
            'label' => 'nullable',
        ]);

        $dataValid['url'] = Storage::disk('uploads')->put('/', $this->url);

        Partner::updateOrCreate(['id' => $this->partner_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();

        if($this->partner_id == '') {
            toast()->success('Partenaire ajouté !')->push();
        } else {
            toast()->success('Partenaire modifié !')->push();
        }
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        $this->partner_id = $id;
        $this->url = $partner->url;
        $this->label = $partner->label;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Partner::find($id)->delete();

        $this->closeModal();

        toast()->success('Partenaire supprimé')->push();
    }
}
