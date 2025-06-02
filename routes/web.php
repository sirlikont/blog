<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');

//Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('/admin/posts/', [PostController::class, 'store'])->name('posts.store');
//Route::get('/admin/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('admin/posts', PostController::class);

