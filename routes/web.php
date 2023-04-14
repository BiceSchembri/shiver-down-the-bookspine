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
Route::get('/createBook', [BookController::class, 'create'])->name('create-book');
Route::post('/createBook', [BookController::class, 'store'])->name('create-book');

// Author views
Route::get('/{author:slug}', [AuthorController::class, 'showDetail'])->name('author-detail');

// Create author

// TODO:
// update book
// delete book

// TODO: CONTACT FORM
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::post('/', [HomepageController::class, 'show'])->name('homepage');


// TODO: reserve book

// TODO: post comments

// TODO: login, logout, admin auth
// TODO: change edit/comment privilegese (only admin can create, update, delete; only registered can comment and reserve)