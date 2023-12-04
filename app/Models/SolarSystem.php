<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    protected $table = 'solar_systems';

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}

?>