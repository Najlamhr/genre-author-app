<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

// Routes for Genre
Route::get('/genres', [GenreController::class, 'index']);   // Read all genres
Route::post('/genres', [GenreController::class, 'store']);  // Create genre
Route::apiResource('genres', GenreController::class)->only(['show', 'update', 'destroy']);

// Routes for Author
Route::get('/authors', [AuthorController::class, 'index']); // Read all authors
Route::post('/authors', [AuthorController::class, 'store']); // Create author
Route::apiResource('authors', AuthorController::class)->only(['show', 'update', 'destroy']);