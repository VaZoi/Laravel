<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', 'App\Http\Controllers\PlanetController@index');
Route::get('/planeten/{planet}', 'App\Http\Controllers\PlanetController@show');

Route::get('/', function () {
    return view('welcome');
});


?>