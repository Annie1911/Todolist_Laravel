<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostControler::class,'index'])->name('article');

Route::post('posts/store',[PostControler::class,'store'])->name('posts.store');

Route::get('posts/edit/{id}',[PostControler::class,'edit'])->name('posts.edit');

Route::put('posts/update/{id}',[PostControler::class,'update'])->name('posts.update');

Route::delete('posts/delete/{id}',[PostControler::class,'delete'])->name('posts.delete');
