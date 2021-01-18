<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\WithFileUploads;
Use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\Models\Imgcomments;

class CommentsController extends Controller
{

    public function show()
    {      
        return view('admin.comments.create');
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'img' => 'image|max:4024',
        'link' => 'max:255',
        ]);

        $imgUploaded = $request->img->store('public/comments');

        $link = $request->link;

        $comment = new Imgcomments();
        $comment->path = $imgUploaded;
        $comment->link = $link;

        if($comment->save())
        {
            return back()->with('status','Comentário adicionado!');
        }
        else
        {
            return back()->with('error','Não foi possível adicionar!');
        }        
    }

    public function list()
    {
        $comments = Imgcomments::all();
        return view('admin.comments.list',['comments' => $comments]);
    }

    public function delete(Request $request)
    {
        $comment = Imgcomments::find($request->commentId);
        Storage::delete($comment->path);

        if($comment->delete())
        {
            return back()->with('status','Comentário deletado!');
        }
        else
        {
            return back()->with('error','Não foi possível excluir!');
        }
    }
}
