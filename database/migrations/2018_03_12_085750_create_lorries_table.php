<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLorriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lorries', function (Blueprint $table) {
            $table->increments('lorry_id');
            $table->string('brand');
            $table->integer('vehicle_id');
            $table->string('engine');
            $table->string('color');
            $table->string('transmission');
            $table->date('production_year');
            //колесна база
            $table->string('wheel');
            //самоскид
            $table->boolean('dump_truck');
            //вантажопідйомність
            $table->float('carrying');
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
        Schema::dropIfExists('lorries');
    }
}
