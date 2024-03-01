<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/solarsystems', [PlanetController::class, 'solarSystemIndex']);
Route::get('/roles-and-users', [RoleUserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});



?>