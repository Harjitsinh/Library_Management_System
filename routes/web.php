<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LibraryController::class, 'index']);
Route::get('/books', [LibraryController::class, 'books']); // View books
Route::get('/add-book', [LibraryController::class, 'addBook']); // Show add book form
Route::post('/add-book', [LibraryController::class, 'storeBook']); // Handle book submission
Route::get('/search', [LibraryController::class, 'search']); // Search books
