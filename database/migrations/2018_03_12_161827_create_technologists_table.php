<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologists', function (Blueprint $table) {
            $table->increments('technologist_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('personal_number');
            $table->string('home_adress');
            //Дата приема на работу
            $table->date('employment_date');
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
        Schema::dropIfExists('technologists');
    }
}
