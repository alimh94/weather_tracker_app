<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array(
            array(
                'id'=>1,
                'name'=>"Dubai",
                'lon'=>"55.30",
                'lat'=>"25.26",
                'country_id'=>1,
            ),
            array(
                'id'=>2,
                'name'=>"Abu Dhabi",
                'lon'=>"54.37",
                'lat'=>"24.47",
                'country_id'=>1,
            ),
            array(
                'id'=>3,
                'name'=>"Sharjah",
                'lon'=>"55.40",
                'lat'=>"25.36",
                'country_id'=>1,
            )
        ));
    }
}
