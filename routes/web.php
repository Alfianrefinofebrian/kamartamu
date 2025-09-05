<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VillaController;

Route::get('/', function () {
    return view('landingpage'); // blade kamu
});

// Property detail is handled by the React SPA (client-side route)
// Route::get('/property/{id}', function ($id) {
//     return view('property', ['propertyId' => $id]);
// });

// Serve property detail as standalone blade
Route::get('/property/{id}', function ($id) {
    return view('property', ['propertyId' => $id]);
});