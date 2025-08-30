<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VillaController;

// Landing page
Route::get('/', [LandingController::class, 'index'])
    ->name('landing.index');

// Villas
Route::get('/villas', [VillaController::class, 'index'])
    ->name('villas.index');

Route::get('/villa/{id}', [VillaController::class, 'show'])
    ->name('villas.show');
