<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use App\Models\Services;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;
    /*public $nomes = array();
    public $copy = array();
    public $img = array();
    public $ordem = array();*/

    public $services;
    public $photo;

    protected $listeners = ['refreshServices' => '$refresh'];

    public function mount()
    {
        
    }    

    public function render()
    {        
        $this->services = Services::where('id','>',0)->orderBy('ordem')->get();
        return view('livewire.services.show')->layout('layouts.app2');
    }
}
