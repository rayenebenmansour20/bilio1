<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});
Route::get('welcome',function(){
    return view('welcome');
});

use App\Http\Controllers\BooksController;

Route::get('/books', [BooksController::class, 'Books']);
Route::get('/addbook', [BooksController::class, 'newBook']);
Route::get('/book/{id}', [BooksController::class, 'book']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
