<?php

namespace App\Clients;

use Illuminate\Support\Facades\Cache;

class CachedWeatherClient  extends WeatherClientDecorator
{

    /**
     * Get weather data
     *
     * @param string $zipCode
     *
     * @return WeatherInterface
     */
    public function getWeather($zipCode)
    {
        $minutes = config('weather.cache_minutes');
        return Cache::remember("weather.{$zipCode}", $minutes, function () use($zipCode) {
            return parent::getWeather($zipCode);
        });
    }
}
