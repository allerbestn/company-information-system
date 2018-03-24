<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('bus_id');
            $table->string('brand');
            $table->integer('vehicle_id');
            $table->string('engine');
            $table->string('color');
            $table->string('transmission');
            $table->date('production_year');
            $table->integer('man_capacity');
            //Виготовляється зараз?
            $table->boolean('make_now');
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
        Schema::dropIfExists('buses');
    }
}
