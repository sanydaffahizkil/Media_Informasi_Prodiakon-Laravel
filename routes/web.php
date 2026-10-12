<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn () => 'pong');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/api/wilayah/{kode}', [HomeController::class, 'getWilayah'])->name('api.wilayah');
