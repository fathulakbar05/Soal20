<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);

