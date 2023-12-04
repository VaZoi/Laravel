<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
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
}


?>