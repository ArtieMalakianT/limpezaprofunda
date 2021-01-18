<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Http\UploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\Parceiros;

class ParceirosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request)
    {         
        $validated = $request->validate([
            'copy' => 'required|string|max:1200',
            'cidades' => 'required|max:900',       
            'img' => 'image|max:3024',                 
        ]);

        $parceiro = Parceiros::find(1);

        $text = Storage::disk('local')->put('public/text/parceiros.txt',$request->copy);
        $text2 = Storage::disk('local')->put('public/text/cidades.txt',$request->cidades);

        if($request->img)
        {
            //$validateImg = $request->validate();
            $uploaded = $request->img->store('public/photos');
            Storage::delete($parceiro->img);
            $parceiro->img = $uploaded;
        }                                

        if($parceiro->save())
        {
            return back()->with('status','Sessão Parceiros Alterada!');
        }
    }
}
