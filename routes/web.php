<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

// API routes
Route::get('film/all', [FilmController::class, 'index']);
Route::apiResource('film', FilmController::class);

// Catch-all pour Vue
Route::get('/{any}', function () {
    return view('movievue.index');
})->where('any', '.*');
