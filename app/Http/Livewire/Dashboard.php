<?php

namespace App\Http\Livewire;

use App\Models\Information;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Carbon\Carbon;

class Dashboard extends Component
{
    use WireToast;

    public $informations;

    protected $rules = [
        'informations.*.label' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->informations = Information::all();
        $this->update_time = Information::latest()->first()->updated_at;
    }

    public function render()
    {
        return view('admin.dashboard')->layout('layouts.app');
    }

    public function updated()
    {
        $this->validate();

        foreach ($this->informations as $information) {
            $information->save();
            $this->update_time = $information->updated_at;
        }
    }
}
