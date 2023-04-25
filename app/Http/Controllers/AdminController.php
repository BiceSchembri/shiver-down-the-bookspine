<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Language;
use App\Models\Author;

class AdminController extends Controller
{
    public function create()
    {
        if (auth()->guest()) {
            abort(403);
        }

        return view('books.create', ['languages' => Language::all(), 'authors' => Author::all()]);
    }

    public function store(BookRequest $request)
    {
        $title = $request->validated()['title'];
        $description = $request->validated()['description'];
        $language = $request->validated()['language'];
        $status = $request->validated()['status'];

        // Assign to author if already existing, otherwise create new author
        $author = Author::firstOrCreate([
            'firstname' => $request->validated()['authorFirstname'],
            'lastname' => $request->validated()['authorLastname'],
            'slug' => Str::slug($request->validated()['authorFirstname'] . '-' . $request->validated()['authorLastname'])
        ]);

        $book = new Book;
        $book->title = $title;
        $book->description = $description;
        $book->language_id = $language;
        $book->status = $status;
        $book->slug = Str::slug($title);
        $book->author_id = $author->id;

        $book->save();

        return redirect('books')->with('success', 'Book added successfully');
    }

    public function delete(Book $book)
    {
        $book->delete();
        return redirect('books')->with('success', 'Book deleted successfully');
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book, 'languages' => Language::all(), 'authors' => Author::all()]);
    }

    public function update(BookRequest $request, Book $book)
    {
        $title = $request->validated()['title'];
        $description = $request->validated()['description'];
        $language = $request->validated()['language'];
        $status = $request->validated()['status'];

        // Assign to author if already existing, otherwise create new author
        $author = Author::firstOrCreate([
            'firstname' => $request->validated()['authorFirstname'],
            'lastname' => $request->validated()['authorLastname'],
            'slug' => Str::slug($request->validated()['authorFirstname'] . '-' . $request->validated()['authorLastname'])
        ]);

        // Update slug only if book title is changed (since slug is based on title)
        if ($title !== $book->title) {
            $book->slug = Str::slug($title);
        }

        $book->title = $title;
        $book->description = $description;
        $book->language_id = $language;
        $book->status = $status;
        $book->author_id = $author->id;

        $book->save();

        return redirect('books')->with('success', 'Book updated successfully');
    }
}
