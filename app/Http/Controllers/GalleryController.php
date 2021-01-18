<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Services;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $service = Services::find($request->service);
        $galleryName = $service->nome;

        $files = $request->file('images');

        if($request->hasFile('images'))
        {
            foreach($files as $file)
            {
                $file->store('public/galerias/'.$galleryName);
            }            
        }
        return back()->with('status','Imagens registradas!');        
    }

    public function showGalleries()
    {
        $services = Services::all();                
        return view('admin.gallery.show',['services' => $services]);    
    }

    public function showFotos(Request $request)
    {
        $service = Services::find($request->serviceId);
        $copy = $service->copy;
        $files = Storage::files('public/galerias/'.$service->nome);        
        return view('gallery',['files' => $files,'copy' => $copy]);
    }

    public function deleteFotos (Request $request)
    {
        $fotos = $request->fotos;
        foreach($fotos as $foto)
        {
            $deleted = Storage::delete($foto);
        }
        return back()->with('status','Fotos deledatas');
    }
}
