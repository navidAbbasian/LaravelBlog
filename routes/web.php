<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class, 'show'] );

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login' , [SessionsController::class, 'create'])->middleware('guest');
Route::Post('login' , [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout' , [SessionsController::class, 'destroy'])->middleware('auth');