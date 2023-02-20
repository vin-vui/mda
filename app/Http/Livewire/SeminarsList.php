<?php

namespace App\Http\Livewire;

use App\Models\Seminar;

use Livewire\Component;

class SeminarsList extends Component
{
    public $search = ['atelier ados', 'atelier parents', 'atelier ados/parents'];

    public function render()
    {
        $seminars = Seminar::whereIn('tag', $this->search)->where('display', true)->latest()->get();

        return view('livewire.seminars-list', compact('seminars'))->layout('layouts.guest');
    }

    public function selectAll()
    {
        $this->search = ['atelier ados', 'atelier parents', 'atelier ados/parents'];
    }

    public function selectA()
    {
        $this->search = ['atelier ados'];
    }

    public function selectP()
    {
        $this->search = ['atelier parents'];
    }

    public function selectAP()
    {
        $this->search = ['atelier ados/parents'];
    }
}
