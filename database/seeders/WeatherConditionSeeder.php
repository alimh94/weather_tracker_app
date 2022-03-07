<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_conditions')->insert(array(
            array(
                'id'=>200,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with light rain",
                'icon'=>"11d",
            ),
            array(
                'id'=>201,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with rain",
                'icon'=>"11d",
            ),
            array(
                'id'=>202,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with heavy rain",
                'icon'=>"11d",
            ),
            array(
                'id'=>210,
                'main'=>"Thunderstorm",
                'description'=>"light thunderstorm",
                'icon'=>"11d",
            ),
            array(
                'id'=>211,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm",
                'icon'=>"11d",
            ),
            array(
                'id'=>212,
                'main'=>"Thunderstorm",
                'description'=>"heavy thunderstorm",
                'icon'=>"11d",
            ),
            array(
                'id'=>221,
                'main'=>"Thunderstorm",
                'description'=>"ragged thunderstorm",
                'icon'=>"11d",
            ),
            array(
                'id'=>230,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with light drizzle",
                'icon'=>"11d",
            ),
            array(
                'id'=>231,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with drizzle",
                'icon'=>"11d",
            ),
            array(
                'id'=>232,
                'main'=>"Thunderstorm",
                'description'=>"thunderstorm with heavy drizzle",
                'icon'=>"11d",
            ),
            array(
                'id'=>300,
                'main'=>"Drizzle",
                'description'=>"light intensity drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>301,
                'main'=>"Drizzle",
                'description'=>"drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>302,
                'main'=>"Drizzle",
                'description'=>"heavy intensity drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>310,
                'main'=>"Drizzle",
                'description'=>"light intensity drizzle rain",
                'icon'=>"09d",
            ),
            array(
                'id'=>311,
                'main'=>"Drizzle",
                'description'=>"drizzle rain",
                'icon'=>"09d",
            ),
            array(
                'id'=>312,
                'main'=>"Drizzle",
                'description'=>"heavy intensity drizzle rain",
                'icon'=>"09d",
            ),
            array(
                'id'=>313,
                'main'=>"Drizzle",
                'description'=>"shower rain and drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>314,
                'main'=>"Drizzle",
                'description'=>"heavy shower rain and drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>321,
                'main'=>"Drizzle",
                'description'=>"shower drizzle",
                'icon'=>"09d",
            ),
            array(
                'id'=>500,
                'main'=>"Rain",
                'description'=>"light rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>501,
                'main'=>"Rain",
                'description'=>"moderate rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>502,
                'main'=>"Rain",
                'description'=>"heavy intensity rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>503,
                'main'=>"Rain",
                'description'=>"very heavy rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>504,
                'main'=>"Rain",
                'description'=>"extreme rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>511,
                'main'=>"Rain",
                'description'=>"freezing rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>520,
                'main'=>"Rain",
                'description'=>"light intensity shower rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>521,
                'main'=>"Rain",
                'description'=>"shower rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>522,
                'main'=>"Rain",
                'description'=>"heavy intensity shower rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>531,
                'main'=>"Rain",
                'description'=>"ragged shower rain",
                'icon'=>"10d",
            ),
            array(
                'id'=>600,
                'main'=>"Snow",
                'description'=>"light snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>601,
                'main'=>"Snow",
                'description'=>"Snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>602,
                'main'=>"Snow",
                'description'=>"Heavy snow	",
                'icon'=>"13d",
            ),
            array(
                'id'=>611,
                'main'=>"Snow",
                'description'=>"Sleet",
                'icon'=>"13d",
            ),
            array(
                'id'=>612,
                'main'=>"Snow",
                'description'=>"light shower sleet	",
                'icon'=>"13d",
            ),
            array(
                'id'=>613,
                'main'=>"Snow",
                'description'=>"Shower sleet",
                'icon'=>"13d",
            ),
            array(
                'id'=>615,
                'main'=>"Snow",
                'description'=>"Light rain and snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>616,
                'main'=>"Snow",
                'description'=>"Rain and snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>620,
                'main'=>"Snow",
                'description'=>"Light shower snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>621,
                'main'=>"Snow",
                'description'=>"Shower snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>622,
                'main'=>"Snow",
                'description'=>"Heavy shower snow",
                'icon'=>"13d",
            ),
            array(
                'id'=>701,
                'main'=>"Mist",
                'description'=>"Mist",
                'icon'=>"50d",
            ),
            array(
                'id'=>711,
                'main'=>"Smoke",
                'description'=>"Smoke",
                'icon'=>"50d",
            ),
            array(
                'id'=>721,
                'main'=>"Dust",
                'description'=>"sand/ dust whirls",
                'icon'=>"50d",
            ),
            array(
                'id'=>731,
                'main'=>"fog",
                'description'=>"fog",
                'icon'=>"50d",
            ),
            array(
                'id'=>741,
                'main'=>"Sand",
                'description'=>"Sand",
                'icon'=>"50d",
            ),
            array(
                'id'=>751,
                'main'=>"Dust",
                'description'=>"Dust",
                'icon'=>"50d",
            ),
            array(
                'id'=>761,
                'main'=>"Ash",
                'description'=>"volcanic ash",
                'icon'=>"50d",
            ),
            array(
                'id'=>771,
                'main'=>"Squall",
                'description'=>"Squall",
                'icon'=>"50d",
            ),
            array(
                'id'=>781,
                'main'=>"Tornado",
                'description'=>"Tornado",
                'icon'=>"50d",
            ),
            array(
                'id'=>800,
                'main'=>"Clear",
                'description'=>"clear sky",
                'icon'=>"01n",
            ),
            array(
                'id'=>801,
                'main'=>"Clouds",
                'description'=>"few clouds: 11-25%",
                'icon'=>"02n",
            ),
            array(
                'id'=>802,
                'main'=>"Clouds",
                'description'=>"scattered clouds: 25-50%",
                'icon'=>"03n",
            ),
            array(
                'id'=>803,
                'main'=>"Clouds",
                'description'=>"broken clouds: 51-84%",
                'icon'=>"04n",
            ),
            array(
                'id'=>804,
                'main'=>"Clouds",
                'description'=>"overcast clouds: 85-100%",
                'icon'=>"04n",
            ),
        ));
    }
}
