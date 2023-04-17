<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        $authors = Author::all();
        return view('authors', ["authors" => $authors]);
    }

    public function showDetail(Author $author)
    {
        return view('author', ['author' => $author]);
    }

    public function create()
    {
        return view('create-author');
    }

    public function store(AuthorRequest $request)
    {
        $authorFirstname = $request->validated()['authorFirstname'];
        $authorLastname = $request->validated()['authorLastname'];
        $description = $request->validated()['description'];

        $author = new Author;
        $author->firstname = $authorFirstname;
        $author->lastname = $authorLastname;
        $author->slug = Str::slug($author->firstname . '-' . $author->lastname);
        $author->description = $description;

        $author->save();

        return redirect('/');
        // return redirect('/')->with('success', 'Author added successfully');
    }
}
