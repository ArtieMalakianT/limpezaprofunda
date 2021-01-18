<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected $rules = [        
        'nome' => 'required',
        'copy' => 'max:1200',
        'ordem' => 'required|unique:services,id',
        'photo' => 'image|max:4024' //max 4Mb
    ];


    public function ShowAll()
    {
        $services = Services::all();
        return view('livewire.services.show')->layout('layouts.app2');
    }
    public function create()
    {

    }
    public function update()
    {
        $this->validate();

        $service = Services::find($this->serviceId);
        $service->nome = $this->nome;
        $service->copy = $this->copy; 
        $service->ordem = $this->ordem;        

        if($this->photo)   
        {            
            $this->validate([
                'photo' => 'image', // 3MB Max
            ]);
            $this->uploadedImg = $this->photo->store('public/photos/servicos');
            Storage::delete($service->img);  
            $service->img = $this->uploadedImg;
        }   
        else {            
            $service->img =  $this->oldImg;
        }                                                                             
                          
        if($service->save())
        {
            $this->dispatchBrowserEvent('adicionado',['message' => 'Serviço Atualizado!']);
            /*session()->flash('adicionado', 'Post successfully updated.');*/
        }
        else {
            $this->dispatchBrowserEvent('erro',['message' => 'Erro ao atualizar o serviço!']);
            /*session()->flash('error', 'Post not updated.');*/  
        }        
    }
    public function delete()
    {
        
    }
}
