<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Book;


class CommentController extends Controller
{
    public function store(CommentRequest $request, Book $book)
    {
        $body = $request->validated()['body'];

        $comment = new Comment;

        $comment->book_id = $book->id;
        $comment->user_id = Auth::id();
        $comment->body = $body;

        $comment->save();

        return view('books.book', compact('book'));
    }
}
