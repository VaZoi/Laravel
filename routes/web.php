<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    $planeten = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return response()->json($planeten);
});


Route::get('/', function () {
    return view('welcome');
});
