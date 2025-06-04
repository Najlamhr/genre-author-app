<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
         $books = \App\Models\Book::with('author', 'genres')->get();
    return view('books.index', compact('books'));
    }
    // Book.php (Model)
public function author()
{
    return view('books.index', compact('books'));
}

}

