<?php

use Illuminate\Support\Facades\Route;

$planets = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ],
];

Route::get('/planeten', function () use ($planets) {
    $filteredPlanets = $planets;

    if (request()->has('planet')) {
        $filteredPlanets = collect($planets)->where('name', request('planet'))->all();
    }

    return view('planeten', ['planets' => $filteredPlanets]);
});


Route::get('/', function () {
    return view('welcome');
});
