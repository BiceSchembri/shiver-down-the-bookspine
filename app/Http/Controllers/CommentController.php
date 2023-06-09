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
        // Allow only logged in users to post a comment
        if (Auth::check()) {
            $body = $request->validated()['body'];
            $comment = new Comment;
            $comment->book_id = $book->id;
            $comment->user_id = Auth::id();
            $comment->body = $body;
            $comment->save();
            return redirect()->route('book-detail', compact('book'))->withInput();
        } else {
            // Return fail message if user is not logged in and tries to post a comment
            return redirect()->back()->with('fail', 'You must be logged in to post a comment.');
        }
    }
}
