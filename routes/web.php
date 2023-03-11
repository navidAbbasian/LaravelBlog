<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;
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

Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin');
Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');

Route::post('newsletter',function (){return redirect('/')->with('success','Coming Soon We will fix it');});
