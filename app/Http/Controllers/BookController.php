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
        return view('create', ['languages' => Language::all(), 'authors' => Author::all()]);
    }

    public function store(BookRequest $request)
    {
        $title = $request->validated()['title'];
        $author = $request->validated()['author'];
        $description = $request->validated()['description'];
        $language = $request->validated()['language'];

        $book = new Book;
        $book->title = $title;
        $book->slug = Str::slug($title);
        $book->language_id = $language;
        // TODO: findOrCreate author, change to author id?
        $book->author = $author;
        $book->description = $description;
        $book->save();

        return redirect('/books')->with('success', 'Your book has been submitted!');
    }
}
