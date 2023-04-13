<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::get('/books', [BookController::class, 'show'])->name('books');
Route::get('/books/{book:slug}', [BookController::class, 'showDetail'])->name('book-detail');
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
