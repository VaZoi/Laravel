<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\planets;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        return view('planets', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planetInfo = DB::table('planets')->where('name', $planet)->first();

        if (!$planetInfo) {
            abort(404);
        }

        return view('planet', ['planet' => $planetInfo]);
    }
}
