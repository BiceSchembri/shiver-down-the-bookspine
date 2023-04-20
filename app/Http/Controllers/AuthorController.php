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

    public function index()
    {
        $authors = Author::with(['book'])->get();
        return view('authors.index', ["authors" => $authors]);
    }

    public function show(Author $author)
    {
        return view('authors.show', ['author' => $author, 'book' => $author->book]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorRequest $request)
    {
        $firstname = $request->validated()['firstname'];
        $lastname = $request->validated()['lastname'];
        $description = $request->validated()['description'];

        $author = new Author;
        $author->firstname = $firstname;
        $author->lastname = $lastname;
        $author->slug = Str::slug($author->firstname . '-' . $author->lastname);
        $author->description = $description;

        $author->save();

        return redirect('authors')->with('success', 'Author added successfully');
    }

    public function delete(Author $author)
    {
        if ($author->book()->count() > 0) {
            // Author has associated books
            return redirect('authors')->with('fail', 'Author could not be deleted because they have books associated with them. Try deleting the books first.');
        } else {
            $author->delete();
            return redirect('authors')->with('success', 'Author deleted successfully');
        }
    }

    public function edit(Author $author)
    {
        return view('authors.edit', ['author' => $author]);
    }

    public function update(AuthorRequest $request, Author $author)
    {
        $firstname = $request->validated()['firstname'];
        $lastname = $request->validated()['lastname'];
        $description = $request->validated()['description'];

        // Update slug only if book title is changed (since slug is based on title)
        if ($firstname !== $author->firstname && $lastname !== $author->lastname) {
            $author->slug = Str::slug($author->firstname . '-' . $author->lastname);
        }

        $author->firstname = $firstname;
        $author->lastname = $lastname;
        $author->description = $description;

        $author->save();

        return redirect('authors')->with('success', 'Author updated successfully');
    }
}
