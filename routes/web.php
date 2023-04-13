<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get('/', [HomepageController::class, 'show'])->name('homepage');

// BOOK VIEWS
Route::get('/books', [BookController::class, 'show'])->name('books');
Route::get('/books/{book:slug}', [BookController::class, 'showDetail'])->name('book-detail');

// TODO: create, edit, delete
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/create', [BookController::class, 'store'])->name('create');

// TODO: CONTACT FORM
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::post('/', [HomepageController::class, 'show'])->name('homepage');


// TODO: reserve book

// TODO: post comments

// TODO: login, logout, admin auth
// TODO: change edit/comment privilegese (only admin can create, update, delete; only registered can comment and reserve)