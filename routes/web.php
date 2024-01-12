<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/solarsystems', [PlanetController::class, 'indexSolarSystems']);




Route::get('/', function () {
    return view('welcome');
});


?>