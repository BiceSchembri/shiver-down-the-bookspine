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

// Create author
Route::get('/createauthor', [AuthorController::class, 'createauthor'])->name('createauthor');
// Route::post('/createauthor', [AuthorController::class, 'store'])->name('createauthor');

// TODO:
// update book
// delete book
// update author
// delete author - only if no books associated

// TODO: CONTACT FORM
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::post('/', [HomepageController::class, 'show'])->name('homepage');

// TODO: login, logout, admin auth
// TODO: change edit/comment privilegese (only admin can create, update, delete; only registered can comment and reserve)

// TODO: reserve book???

// TODO: post comments