<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function showDetail(Book $book)
    {
        return view('book', ['book' => $book]);
    }

    public function showForm()
    {
        //
    }

    public function store()
    {
        //
    }
}
