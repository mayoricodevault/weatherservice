<?php


namespace App\Contracts;


interface WeatherClientInterface
{
    /**
     * Get weather data
     *
     * @param string $zipCode
     *
     * @return WeatherInterface
     */
    public function getWeather($zipCode);
}