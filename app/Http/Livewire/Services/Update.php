<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use App\Models\Services;
use Livewire\WithFileUploads;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    public $serviceId;
    public $nome;
    public $copy;
    public $oldImg;
    public $photo;
    public $ordem;
    public $uploadedImg;

    use WithFileUploads;

    protected $rules = [        
        'nome' => 'required:unique:services.id',
        'copy' => 'max:1200',
        'ordem' => 'required|unique:services,id'
    ];

    protected $listeners = ['refreshServices' => '$refresh'];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
   
    public function mount($serviceId)
    {
        $service = Services::find($this->serviceId);
        $this->nome = $service->nome;
        $this->copy = $service->copy;        
        $this->ordem = $service->ordem;
        $this->oldImg = $service->img;
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
        //return redirect('/services/show');
    }
    public function delete($serviceId)
    {
        $service = Services::find($serviceId);

        //Service::destroy($serviceId);
        //$this->dispatchBrowserEvent('adicionado',['message' => 'Serviço deletado!']);
        
        if($service->delete())
        {
            Storage::delete($service->img);
            $this->dispatchBrowserEvent('adicionado',['message' => 'Serviço deletado!']);
            $this->emit('refreshServices');
        }
        else
        {
            $this->dispatchBrowserEvent('erro',['message' => 'Erro ao deletar!']);
            $this->emit('refreshServices');
        }        
        
    }
    public function render()
    {                
        return view('livewire.services.update');
    }
}
