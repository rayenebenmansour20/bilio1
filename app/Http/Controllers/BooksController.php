<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 

class BooksController extends Controller
{
    public function book($id){
        echo "nocap".$id;
    }

    public function newBook() {
        $newBook = new Book();
        $newBook->titre = "Kylian";
        $newBook->auteurs = "Ragazzi";
        $newBook->save();
    }

    public function Books() {
        $books = Book::all();
        return view('posts.books', ['books'=>$books]);
    }

}
