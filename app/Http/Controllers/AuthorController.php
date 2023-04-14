<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function show()
    {
        $authors = Author::all();
        return view('authors', ["authors" => $authors]);
    }

    public function showDetail(Author $author)
    {
        return view('author', ['author' => $author]);
    }
}
