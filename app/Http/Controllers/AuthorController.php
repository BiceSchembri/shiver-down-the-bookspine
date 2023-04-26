<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with(['book'])->get();
        return view('authors.index', ["authors" => $authors]);
    }

    public function show(Author $author)
    {
        return view('authors.show', ['author' => $author, 'book' => $author->book]);
    }
}
