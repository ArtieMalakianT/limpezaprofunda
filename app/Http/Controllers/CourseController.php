<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Http\UploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\Course;


class CourseController extends Controller
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

        $course = Course::find(1);

        $text = Storage::disk('local')->put('public/text/course.txt',$request->copy);
        if($request->img)
        {
            $uploaded = $request->img->store('public/photos');
            Storage::delete($course->path);
            $course->path = $uploaded;
        }                
        
        $course->link = $request->link;

        if($course->save())
        {
            return back()->with('status','Sessão Treinamento Alterada!');
        }
    }
}
