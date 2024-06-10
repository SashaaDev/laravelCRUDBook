<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'getAll']);
Route::get('/books/{id}', [BookController::class, 'getById']);
Route::post('/books', [BookController::class, 'create']);
Route::patch('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'delete']);
