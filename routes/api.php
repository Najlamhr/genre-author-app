<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::middleware('api')->group(function () {
    Route::get('/authors', [AuthorController::class, 'index']);
    Route::get('/books', [BookController::class, 'index']);
});
