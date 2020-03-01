<?php

namespace App\Clients;

use App\Contracts\WeatherClientInterface;

class WeatherClientDecorator implements WeatherClientInterface
{
    /**
     * @var WeatherClientInterface
     */
    private $weatherClient;

    public function __construct(WeatherClientInterface $weatherClient)
    {
        $this->weatherClient = $weatherClient;
    }

    /**
     * Get weather data
     *
     * @param string $zipCode
     *
     * @return WeatherInterface
     */
    public function getWeather($zipCode)
    {
        return $this->weatherClient->getWeather($zipCode);
    }
}
