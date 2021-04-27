<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_vehicle_id');
            $table->foreign('model_vehicle_id')->references('id')->on('model_vehicles');
            $table->unsignedBigInteger('type_vehicle_id');
            $table->foreign('type_vehicle_id')->references('id')->on('type_vehicles');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->float('current_kilometers')->default(0);
            $table->string('engine_size');
            $table->enum('fuel_type', ['GASOIL', 'GASOLINE', 'ELECTRONIC']);
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
        Schema::dropIfExists('vehicles');
    }
}
