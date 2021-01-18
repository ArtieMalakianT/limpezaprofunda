<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\WelcomeController;


use App\Models\Services;
use App\Models\Banners;
use App\Models\About;
use App\Models\Imgcomments;
use App\Models\Course;
use App\Models\Store;
use App\Models\Parceiros;
use App\Models\Popup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'services' => Services::where('id','>',0)->orderBy('ordem')->get(), 
        'banner' => Banners::find(1),
        'about' => About::find(1),
        'comments' => Imgcomments::all(),
        'course' => Course::find(1),
        'store' => Store::find(1),
        'parceiro' => Parceiros::find(1),
        'popup' => Popup::find(1),
        ]);
});

Route::post('/mail/contact',[WelcomeController::class,'sendcontato'])->name('sendToContact');

Route::get('/fotos/{serviceId}',[GalleryController::class,'showFotos']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/services',\App\Http\Livewire\Services\Form::class);
Route::get('/services/show',\App\Http\Livewire\Services\Show::class);

Route::get('/banners',\App\Http\Livewire\Banner\Create::class);

Route::get('/about/edit',[CopyController::class,'showFormAbout']);

Route::post('/about/update',[CopyController::class,'updateCopy'])->name('aboutUpdate');

Route::prefix('/comments')->group(function(){

    Route::get('/form',[CommentsController::class,'show']);
    Route::post('/create',[CommentsController::class,'create'])->name('createComment');
    Route::get('/list',[CommentsController::class,'list'])->name('listComments');
    Route::delete('/delete',[CommentsController::class,'delete']);
});

Route::prefix('/couser')->group(function(){
    Route::get('/show', function(){return view('admin.course.form',['course' => Course::find(1)]);})->name('courseForm');
    Route::post('/update',[CourseController::class,'update'])->name('courseUpdate');
});

Route::prefix('/store')->group(function(){
    Route::get('/form',function(){return view('admin.store.form',['store' => Store::find(1)]);});
    Route::post('/update',[StoreController::class,'update'])->name('storeUpdate');
});

Route::prefix('/parceiros')->group(function(){
    Route::get('/form',function(){
        return view('admin.parceiros.create',['parceiro' => Parceiros::find(1)]);
    })->name('parceirosForm');
    Route::post('/update',[ParceirosController::class,'update'])->name('parceirosUpdate');
});

Route::prefix('/galerias')->group(function(){
    Route::get('/form',function(){
        return view('admin.gallery.create',['services' => Services::all()]);
    })->name('galleryCreate');

    Route::post('/upload',[GalleryController::class,'create'])->name('uploadGallery');

    Route::get('/show',[GalleryController::class,'showGalleries'])->name('showGalleries');

    Route::delete('/delete/fotos',[GalleryController::class,'deleteFotos'])->name('deleteFotos');
});

Route::prefix('/popup')->group(function(){
    Route::get('/form',function(){
        return view('admin.popup.create',['popup' => Popup::find(1)]);
    })->name('popupForm');

    Route::post('/update',[PopupController::class,'update'])->name('popupUpdate');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/banner',\App\Http\Livewire\Banner::class);