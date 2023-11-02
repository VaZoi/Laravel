<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planets;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = planets::all();
        return view('planeten', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $selectedPlanet = planets::where('name', $planet)->first();
        return view('planet', ['planet' => $selectedPlanet]);
    }
}

