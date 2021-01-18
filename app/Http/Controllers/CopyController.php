<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\About;
use Livewire\WithFileUploads;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CopyController extends Controller
{
    public $obj;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showFormAbout()
    {
        //echo"teste";exit;
        $this->selectTable('about',1);
        $obj = $this->obj;
        
        return view('admin.copyform',['obj'=>$obj]);
    }

    public function updateCopy (Request $request)
    {
        $validated = $request->validate([
            'copy' => 'required|max:1100',
            'link' => 'max:355',
        ]);
        
        $this->selectTable('about',1);
        $obj = $this->obj;        

        $obj->copy = $request->copy;
        $obj->link = $request->link;
        if($obj->save())
        {            
            return back()->with('status','Copy Alterada!');
            $this->dispatchBrowserEvent('adicionado',['message' => 'Copy alterada!']);
        }
        else
        {
            return back()->with('error','Copy não Alterada!');
        }
    }
    protected function selectTable($table,$id)
    {
        switch($table)
        {
            case 'services':
            $this->obj = Services::find($id);
            break;
            
            case 'about':
            $this->obj = About::find($id);
            break;
        }
    }
}
