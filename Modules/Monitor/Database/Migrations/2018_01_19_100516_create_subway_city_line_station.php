<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubwayCityLineStation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subway_city_line_station', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('subway_city_line_id');
            $table->string('station_name');
            $table->boolean('is_transfer')->default(0);
            $table->string('transfer_station');

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
