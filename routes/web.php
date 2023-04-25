<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'show'])->name('homepage');

// Book views
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/detail/{book:slug}', [BookController::class, 'show'])->name('book-detail');

// Create book - admin
Route::get('/books/create', [AdminController::class, 'create'])->middleware('admin')->name('create-book');
Route::post('/books/create', [AdminController::class, 'store'])->middleware('admin')->name('create-book');
// Edit book - admin
Route::get('/books/edit/{book:slug}', [AdminController::class, 'edit'])->middleware('admin')->name('edit');
Route::put('/books/edit/{book:slug}', [AdminController::class, 'update'])->middleware('admin')->name('edit');
// Delete book - admin
Route::delete('/books/delete/{book:slug}', [AdminController::class, 'delete'])->middleware('admin')->name('delete-book');

// Author views
Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/authors/detail/{author:slug}', [AuthorController::class, 'show'])->name('author-detail');

// Create author
Route::get('/authors/create', [AuthorController::class, 'create'])->name('create-author');
Route::post('/authors/create', [AuthorController::class, 'store'])->name('create-author');
// Edit author
Route::get('/authors/edit/{author:slug}', [AuthorController::class, 'edit'])->name('edit');
Route::put('/authors/edit/{author:slug}', [AuthorController::class, 'update'])->name('edit');
// Delete author
Route::delete('/authors/delete/{author:slug}', [AuthorController::class, 'delete'])->name('delete-author');

// User registration
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'store'])->middleware('guest')->name('register');

// User sessions
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

// Post comments (only if logged in user)
Route::post('/books/detail/{book:slug}/comments', [CommentController::class, 'store'])->name('store-comment');

// TODO: admin auth (CUD, view soft deletes)
// TODO: contact form (only logged in users)
// TODO: user profile page?
// TODO: manyToMany rel. for authors and books
