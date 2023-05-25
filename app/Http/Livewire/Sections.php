<?php

namespace App\Http\Livewire;

use App\Models\Section;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Image;

class Sections extends Component
{
    use WireToast;
    use WithFileUploads;

    public $section_name, $section, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6, $update_time;
    public $target = ['image_1', 'input_1', 'photo_1', 'sendCroppedImage1'], $label = 'Description', $has_image = true, $rows = 15;
    protected $listeners = ['uploadCroppedImage', 'imageChanged'];
    public $photo_1, $photo_2, $photo_3, $photo_4, $photo_5, $photo_6;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:20480',
        ]);
    }

    public function uploadCroppedImage($number, $croppedImageDataUrl)
    {
        $image = Image::make($croppedImageDataUrl);
        $tempFileName = tempnam(sys_get_temp_dir(), 'cropped_image_');
        $image->save($tempFileName, 90, 'png');
        $uploadedFile = new UploadedFile($tempFileName, 'cropped_image.png');

        $filePath = Storage::disk('uploads')->putFile('/', $uploadedFile);

        $section = $this->section;
        $section->{$number} = $filePath;

        if ($section->save()) {
            $this->update_time = now();
            return redirect(request()->header('Referer'));
        }
    }

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
                $this->target = ['image_2', 'input_2', 'photo_2', 'sendCroppedImage2'];
                break;
            case 'PUBLICS_PRO':
                $this->label = 'Professionnels';
                $this->target = ['image_3', 'input_3', 'photo_3', 'sendCroppedImage3'];
                break;
            case 'SEMINARS':
                $this->has_image = false;
                break;
            case 'MISSIONS':
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
        $section->save();

        $this->update_time = now();
    }
}
