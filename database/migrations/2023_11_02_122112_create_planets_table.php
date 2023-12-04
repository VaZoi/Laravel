<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('size_in_km');
            $table->unsignedBigInteger('solar_system_id');
            $table->timestamps();

            $table->foreign('solar_system_id')->references('id')->on('solar_systems');
        });
    }

    public function down()
    {
        Schema::dropIfExists('planets');
    }
}

