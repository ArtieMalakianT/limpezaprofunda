<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use Livewire\WithFileUploads;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire;
Use App\Models\Services;

class Form extends Component
{
    public $photo;
    public $uploadedImage;
    public $nome;
    public $copy;
    public $ordem;

    protected $rules = [
        'photo' => 'image|max:3024', // 3MB Max
        'nome' => 'required|unique:services',
        'copy' => 'max:1200',
        'ordem' => 'required|unique:services'
    ];

    protected $listeners = ['refreshServices' => '$refresh'];

    use WithFileUploads;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    

    public function save()
    {        
        $this->validate();

        //$this->emit('Salvo!');
        
        //session()->flash('message', 'Post successfully updated.');
        
        $this->uploadedImage = $this->photo->store('public/photos/servicos');        
        
        if($this->uploadedImage)
        {
            
            Services::create([
               'nome' => $this->nome,
               'copy' => $this->copy,
                'img' => $this->uploadedImage,
                'ordem' => $this->ordem,
           ]);
        }
        else
        {
            $this->dispatchBrowserEvent('erro',['message' => 'Imagem não enviada!']);
        }

        $this->photo = $this->nome = $this->copy = $this->ordem = NULL;

        $this->emit('refreshServices');        
        
        $this->dispatchBrowserEvent('adicionado',['message' => 'Serviço registrado!']);
    }

    public function upload()
    {
        dd ("Rad");
    }

    public function render()
    {
        return view('livewire.services.form')->layout('layouts.app2');
    }
}
