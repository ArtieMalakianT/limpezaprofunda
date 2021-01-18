<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Popup;

class PopupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'img' => 'image|max:4024',
            'link' => 'max:255',
        ]);
               

        $link = $request->link;

        $comment = Popup::find(1);
        if($request->hasFile('img'))
        {
            Storage::delete($comment->img);
            $imgUploaded = $request->img->store('public/popups');
            $comment->img = $imgUploaded;
        }
        
        $comment->link = $link;

        if($comment->save())
        {
            return back()->with('status','Popup atualizado!');
        }
        else
        {
            return back()->with('error','Não foi possível adicionar o popup!');
        }        
    }
}
