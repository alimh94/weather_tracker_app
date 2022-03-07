<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';

    protected $fillable = [
        'country_id',
        'name',
        'lat',
        'lon'
    ];

    public function country() {
        return $this->belongsTo('App\Models\Country');
    }

    public function weatherCondition() {
        return $this->hasMany('App\Models\WeatherCondition', 'city_id');
    }
}
