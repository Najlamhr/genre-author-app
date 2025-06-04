<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;

// ========== 1. ROUTE TERBUKA UNTUK UMUM ==========
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{genre}', [GenreController::class, 'show']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/book/{book}', [BookController::class, 'show']);


// ========== 2. ROUTE KHUSUS ADMIN ==========
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    // Genre
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{genre}', [GenreController::class, 'update']);
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

    // Author
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{author}', [AuthorController::class, 'update']);
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy']);

    // Transaction khusus admin
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy']);
});


// ========== 3. ROUTE KHUSUS CUSTOMER ==========
Route::middleware(['auth:sanctum', 'role:customer'])->group(function () {
    Route::post('/transactions', [TransactionController::class, 'store']);
    Route::put('/transactions/{id}', [TransactionController::class, 'update']);
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);
});
