<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class WeatherDailyForcastLog extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'temp',
        'feels_like',
        'humidity',
        'wind_speed',
        'city_id',
        'weather_condition_id'
    ];

    public function city() {
        return $this->belongsTo('App\Models\City');
    }

    public function weatherCondition() {
        return $this->belongsTo('App\Models\WeatherCondition');
    }
}
