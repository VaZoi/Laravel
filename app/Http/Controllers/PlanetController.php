<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\SolarSystem;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('solarSystem')->get();
        return view('planets', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planetInfo = Planet::where('name', $planet)->first();

        if (!$planetInfo) {
            abort(404);
        }

        return view('planet', ['planet' => $planetInfo]);
    }

    public function solarSystemIndex()
    {
        $solarSystems = SolarSystem::withCount('planets')->get();
        return view('solarsystems', ['solarSystems' => $solarSystems]);
    }
}


?>