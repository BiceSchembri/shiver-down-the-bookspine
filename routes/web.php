<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'show'])->name('homepage');

// Book views
Route::get('/books', [BookController::class, 'show'])->name('books');
Route::get('/books/{book:slug}', [BookController::class, 'showDetail'])->name('book-detail');

// Create book
Route::get('/create-book', [BookController::class, 'create'])->name('create-book');
Route::post('/create-book', [BookController::class, 'store'])->name('create-book');

// Author views
Route::get('/{author:slug}', [AuthorController::class, 'showDetail'])->name('author-detail');

// Delete book
Route::delete('/books/{book:slug}', [BookController::class, 'delete'])->name('delete-book');

// Edit book
Route::get('/books/{book:slug}/edit-book', [BookController::class, 'edit'])->name('edit-book');
Route::patch('/books/{book:slug}/edit-book', [BookController::class, 'update'])->name('edit-book');

// TODO:
// Fix create author (gives 404 error)
Route::get('/create-author', [AuthorController::class, 'create'])->name('create-author');
Route::post('/create-author', [AuthorController::class, 'store'])->name('create-author');
// TODO:
// update author
// delete author - only if no books associated

// TODO: CONTACT FORM
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::post('/', [HomepageController::class, 'show'])->name('homepage');

// TODO: login, logout, admin auth
// TODO: change edit/comment privilegese (only admin can create, update, delete; only registered can comment and reserve)

// TODO: reserve book???

// TODO: post comments