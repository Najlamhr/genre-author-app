<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get(); // jika relasi sudah dibuat
        return response()->json($books);
    }
    // Book.php (Model)
public function author()
{
    return $this->belongsTo(Author::class);
}

}

