<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'planets';

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class, 'Solar_System_ID');
    }
}
