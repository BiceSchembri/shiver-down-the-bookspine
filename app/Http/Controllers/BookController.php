<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Language;
use App\Models\Author;

class BookController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function showDetail(Book $book)
    {
        return view('book', ['book' => $book]);
    }

    public function create()
    {
        // TODO:
        // get info from AuthorController
        return view('createBook', ['languages' => Language::all(), 'authors' => Author::all()]);
    }

    public function store(BookRequest $request)
    {
        $title = $request->validated()['title'];
        $authorFirstname = $request->validated()['authorFirstname'];
        $authorLastname = $request->validated()['authorLastname'];
        $description = $request->validated()['description'];
        $language = $request->validated()['language'];
        $status = $request->validated()['status'];

        // Assign to author if already existing, otherwise create new author
        $author = Author::firstOrCreate([
            'firstname' => $authorFirstname,
            'lastname' => $authorLastname,
            'slug' => Str::slug($authorFirstname . '-' . $authorLastname)
        ]);

        $book = new Book;
        $book->title = $title;
        $book->description = $description;
        $book->language_id = $language;
        $book->status = $status;
        $book->slug = Str::slug($title);
        $book->author_id = $author->id;

        $book->save();

        return redirect('/books')->with('success', 'Book added successfully');
    }
}
