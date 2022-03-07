<?php

namespace App\Console\Commands;

use App\Models\WeatherForcastLog;
use App\Models\City;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WeatherCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get weather condition every 10 minuets';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('retrieve weather condition for our cities');
        foreach (City::all() as $city) {
            $request = Http::get('api.openweathermap.org/data/2.5/weather?q='.$city->name.',&units=metric&appid=4c7f1f68689243332f5672f3f5d973e0');
            $response = $request->getBody()->getContents();

            $weather_record = json_decode($response, true);
            if ($weather_record['cod']==200){
                Log::info("API Request Succeed!");
                WeatherForcastLog::create([
                    'temp' => $weather_record['main']['temp'],
                    'feels_like' => $weather_record['main']['feels_like'],
                    'humidity' => $weather_record['main']['humidity'],
                    'wind_speed' => $weather_record['wind']['speed'],
                    'city_id' => $city->id,
                    'weather_condition_id' => $weather_record['weather'][0]['id']
                ]);
            }
            else{
                Log::info("API Request Failed");
            }

        }
    }
}
