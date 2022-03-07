<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherForcastLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'temp',
        'feels_like',
        'humidity',
        'wind_speed',
        'city_id',
        'weather_condition_id',
    ];

    public function city() {
        return $this->belongsTo('App\Models\City');
    }

    public function weatherCondition() {
        return $this->belongsTo('App\Models\WeatherCondition');
    }
}
