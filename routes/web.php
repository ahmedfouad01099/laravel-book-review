<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});


Route::resource('books', BookController::class);

// For resourceful routes (recommended if you have full CRUD)
Route::resource('books.reviews', 'BookReviewController');

// OR manually define the create route
Route::get('/books/{book}/reviews/create', [BookController::class, 'create'])
    ->name('books.reviews.create');