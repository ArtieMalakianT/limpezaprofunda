<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\About;

class Create extends Component
{
    public $about;
    public $copy;
    public $link;

    protected $rules = [
        'copy' => 'max:1200',
        'link' => 'max:355',        
    ];

    public function mount()
    {
        $about = About::find(1); 
        $this->copy = $about->copy;
    }

    public function update()
    {       
        $about = About::find(1);
        $about->copy = $this->copy;
        $about->link = $this->link;
        if($about->save())
        {
            $this->dispatchBrowserEvent('adicionado',['message' => 'Copy Atualizada!']);
        }
        else
        {
            $this->dispatchBrowserEvent('erro',['message' => 'Erro ao atualizar Copy!']);
        }
        $this->dispatchBrowserEvent('summernote');
    }

    public function render()
    {
        return view('livewire.about.create')->layout('layouts.app2');
    }
}
