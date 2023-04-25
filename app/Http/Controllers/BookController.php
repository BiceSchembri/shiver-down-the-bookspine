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

    public function index()
    {
        $books = Book::with(['language', 'author'])->get();
        return view('books.index', ['books' => $books]);
    }

    public function show(Book $book)
    {
        $book = Book::with(['language', 'author', 'comments.user'])->withCount('comments')->where('id', $book->id)->first();
        $comments = $book->comments()->get();
        return view('books.show', ['book' => $book, 'comments' => $comments]);
    }
}
