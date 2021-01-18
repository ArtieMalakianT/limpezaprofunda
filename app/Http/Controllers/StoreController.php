<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Http\UploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\Store;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request)
    {   
        $validated = $request->validate([
            'copy' => 'required|string|max:1200',
            'link' => 'required|max:255',
            'img' => 'image|max:3024',            
        ]);

        $course = Store::find(1);

        $text = Storage::disk('local')->put('public/text/store.txt',$request->copy);
        if($request->img)
        {
            $uploaded = $request->img->store('public/photos');
            Storage::delete($course->img);
            $course->img = $uploaded;
        }                
        
        $course->link = $request->link;

        if($course->save())
        {
            return back()->with('status','Sessão Loja Virtual Alterada!');
        }
    }
}
