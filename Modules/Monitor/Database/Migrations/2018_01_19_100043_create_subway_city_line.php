<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubwayCityLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subway_city_line', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('subway_city_id');
            $table->string('line_name');
            $table->string('line_terminal');
            $table->tinyInteger('line_station_number');

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
        Schema::dropIfExists('');
    }
}
