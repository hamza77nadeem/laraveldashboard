<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_title');
            $table->string('brand');
            $table->string('model');
            $table->string('vehicle_desc');
            $table->string('price');
            $table->string('upload1');
            $table->string('upload2');
            $table->string('upload3');
            $table->string('upload4');
            $table->string('model_year');
            $table->string('km');
            $table->string('fuel_type');
            $table->string('engine_type');
            $table->string('engine_desc');
            $table->string('no_of_cylinder');
            $table->string('mileage_highway');
            $table->string('fuel_tank');
            $table->string('seating_capacity');
            $table->string('air_conditioner');
            $table->string('power_door');
            $table->string('antilook');
            $table->string('brake');
            $table->string('Steering');
            $table->string('Airbag');
            $table->string('Player');
            $table->string('car');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
