<?php


namespace App\Facades;


use App\Contracts\WeatherClientInterface;
use Illuminate\Support\Facades\Facade;

class WeatherClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return WeatherClientInterface::class;
    }

}