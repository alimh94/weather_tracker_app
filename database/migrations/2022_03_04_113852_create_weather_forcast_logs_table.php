<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherForcastLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_forcast_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->float('temp');
            $table->float('feels_like');
            $table->float('humidity');
            $table->float('wind_speed');
            $table->unsignedBigInteger('weather_condition_id');
            $table->foreign('weather_condition_id')->references('id')->on('weather_conditions');
            $table->index(['city_id', 'created_at', 'temp', 'weather_condition_id']);
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
        Schema::dropIfExists('weather_forcast_logs');
    }
}
