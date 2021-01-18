<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use Livewire\WithFileUploads;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\Models\Banners;

class Create extends Component
{
    use WithFileUploads;

    public $banner;
    public $photo;
    public $uploadedImage;

    protected $rules = [
        'photo' => 'required|image|max:3024' //3mb
    ];

    public function mount ()
    {
        $this->banner = Banners::find(1);
    }

    public function upload()
    {
        $this->validate();

        $this->uploadedImage = $this->photo->store('public/banner');

        if($this->uploadedImage)
        {
            Storage::delete($this->banner->path);
        }

        $banner = Banners::find(1);
        $banner->path = $this->uploadedImage;

        if($banner->save())
        {
            $this->dispatchBrowserEvent('adicionado',['message' => 'Banner registrado!']);
        }
        else
        {
            $this->dispatchBrowserEvent('erro',['message' => 'Erro ao enviar o banner!']);
        }
    }

    public function render()
    {
        return view('livewire.banner.create')->layout('layouts.app2');
    }
}
