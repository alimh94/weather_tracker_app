<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherDailyForcastLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_daily_forcast_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id')->nullable()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->float('temp')->nullable()->index();
            $table->float('feels_like');
            $table->float('humidity');
            $table->float('wind_speed');
            $table->unsignedBigInteger('weather_condition_id')->nullable()->index();
            $table->foreign('weather_condition_id')->references('id')->on('weather_conditions');
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
        Schema::dropIfExists('weather_daily_forcast_logs');
    }
}
