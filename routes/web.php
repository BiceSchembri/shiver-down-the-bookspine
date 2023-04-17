<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'show'])->name('homepage');

// Book views
Route::get('/books', [BookController::class, 'show'])->name('books');
Route::get('/books/{book:slug}', [BookController::class, 'showDetail'])->name('book-detail');
// Create book
Route::get('/create-book', [BookController::class, 'create'])->name('create-book');
Route::post('/create-book', [BookController::class, 'store'])->name('create-book');
// Edit book
Route::get('/books/{book:slug}/edit-book', [BookController::class, 'edit'])->name('edit-book');
Route::put('/books/{book:slug}/edit-book', [BookController::class, 'update'])->name('edit-book');
// Delete book
Route::delete('/books/{book:slug}', [BookController::class, 'delete'])->name('delete-book');

// Author views
Route::get('/authors/{author:slug}', [AuthorController::class, 'showDetail'])->name('author-detail');
// Create author
Route::get('/create-author', [AuthorController::class, 'create'])->name('create-author');
Route::post('/create-author', [AuthorController::class, 'store'])->name('create-author');
// Edit author
Route::get('/authors/{author:slug}/edit-author', [AuthorController::class, 'edit'])->name('edit-author');
Route::put('/authors/{author:slug}/edit-author', [AuthorController::class, 'update'])->name('edit-author');
// Delete author
// TODO: only if no books associated
Route::delete('/authors/{author:slug}', [AuthorController::class, 'delete'])->name('delete-author');

// Register user
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register');

// TODO: CONTACT FORM

// TODO: login, logout, admin auth
// TODO: change edit/comment privileges (only admin can create, update, delete; only registered can comment and reserve)

// TODO: post comments

// TODO: reserve book???
