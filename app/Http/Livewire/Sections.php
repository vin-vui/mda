<?php

namespace App\Http\Livewire;

use App\Models\Section;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Sections extends Component
{
    use WireToast;
    use WithFileUploads;

    public $section_name, $section, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6, $update_time, $label = 'Description', $has_image = true, $rows = 15;

    public function mount($section_name)
    {
        $this->section = Section::where('title', $section_name)->first();
        $this->description = $this->section->description;
        $this->image_1 = $this->section->image_1;
        $this->image_2 = $this->section->image_2;
        $this->image_3 = $this->section->image_3;
        $this->image_4 = $this->section->image_4;
        $this->image_5 = $this->section->image_5;
        $this->image_6 = $this->section->image_6;
        $this->update_time = $this->section->updated_at;
        $this->section_name = $section_name;

        switch ($section_name) {
            case 'PUBLICS':
                $this->label = 'Description générale';
                $this->has_image = false;
                $this->rows = 5;
                break;
            case 'PUBLICS_TEEN':
                $this->label = 'Adolescents';
                break;
            case 'PUBLICS_FAMILY':
                $this->label = 'Familles/Parents';
                break;
            case 'PUBLICS_PRO':
                $this->label = 'Professionnels';
                break;
            case 'SEMINARS':
                $this->has_image = false;
                $this->rows = 3;
                break;
            case 'MISSIONS':
                $this->has_image = false;
                break;
            case 'RESADO':
                $this->has_image = false;
                break;
            case 'US':
                $this->has_image = false;
                break;
            case 'INFORMATIONS':
                $this->has_image = false;
                $this->rows = 5;
                break;
            case 'FOOTER':
                $this->has_image = false;
                $this->rows = 5;
                break;
        }
    }

    public function updated()
    {
        $section = $this->section;
        $section->description = $this->description;
        if ($this->image_1 != $this->section->image_1) {
            $section->image_1 = Storage::disk('uploads')->put('/', $this->image_1);
        }
        if ($this->image_2 != $this->section->image_2) {
            $section->image_2 = Storage::disk('uploads')->put('/', $this->image_2);
        }
        if ($this->image_3 != $this->section->image_3) {
            $section->image_3 = Storage::disk('uploads')->put('/', $this->image_3);
        }
        if ($this->image_4 != $this->section->image_4) {
            $section->image_4 = Storage::disk('uploads')->put('/', $this->image_4);
        }
        if ($this->image_5 != $this->section->image_5) {
            $section->image_5 = Storage::disk('uploads')->put('/', $this->image_5);
        }
        if ($this->image_6 != $this->section->image_6) {
            $section->image_6 = Storage::disk('uploads')->put('/', $this->image_6);
        }
        $section->save();

        $this->update_time = now();
    }
}
