<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class, 'show'] );
Route::post('posts/{post:slug}/comments',[PostCommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login' , [SessionsController::class, 'create'])->middleware('guest');
Route::Post('login' , [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout' , [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create', [PostController::class, 'create']);
Route::post('admin/posts', [PostController::class, 'store']);

Route::get('test', function (){
    dd('test');
});










Route::post('newsletter',function (){
    //until video no60
//    request()->validate([
//        'email'=> 'require|email'
//    ]);
//    try {
//        $newsletter = new \App\Services\Newsletter();
//    $newsletter->subscribe(request('email'));
//    } catch (Exception $e){
//        throw \Illuminate\Validation\ValidationException::withMessages('error messeage');
//    }
//    ddd($response);

    return redirect('/')->with('success','Coming Soon We will fix it');
});
