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
Route::get('/books/detail/{book:slug}', [BookController::class, 'showDetail'])->name('book-detail');
// Create book
Route::get('/books/create', [BookController::class, 'create'])->name('create-book');
Route::post('/books/create', [BookController::class, 'store'])->name('create-book');
// Edit book
Route::get('/books/edit/{book:slug}', [BookController::class, 'edit'])->name('edit');
Route::put('/books/edit/{book:slug}', [BookController::class, 'update'])->name('edit');
// Delete book
Route::delete('/books/delete/{book:slug}', [BookController::class, 'delete'])->name('delete-book');

// Author views
Route::get('/authors', [AuthorController::class, 'show'])->name('authors');
Route::get('/authors/detail/{author:slug}', [AuthorController::class, 'showDetail'])->name('author-detail');
// Create author
Route::get('/authors/create', [AuthorController::class, 'create'])->name('create-author');
Route::post('/authors/create', [AuthorController::class, 'store'])->name('create-author');
// Edit author
Route::get('/authors/edit/{author:slug}', [AuthorController::class, 'edit'])->name('edit');
Route::put('/authors/edit/{author:slug}', [AuthorController::class, 'update'])->name('edit');
// Delete author
Route::delete('/authors/delete/{author:slug}', [AuthorController::class, 'delete'])->name('delete-author');

// Register user
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register');

// TODO: login, logout, admin auth
// TODO: change edit/comment privileges (only admin can create, update, delete; only registered can comment and reserve)

// TODO: CONTACT FORM
// TODO: post comments
// TODO: reserve book???
