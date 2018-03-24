<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('brand');
            $table->string('body_type');
            $table->string('engine');
            $table->string('color');
            $table->string('transmission');
            $table->date('production_year');
            //Виготовляється зараз?
            $table->boolean('make_now');
            //Яким цехом був виготовлений
            $table->integer('workshop_id');
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
        Schema::dropIfExists('cars');
    }
}
