<?php

namespace App\Clients;

use App\Contracts\WeatherClientInterface;
use App\Contracts\WeatherInterface;
use App\Models\Weather;
use App\Traits\WeatherTrait;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class WeatherClient implements WeatherClientInterface
{
    use WeatherTrait;

    /**
     * Get weather data
     *
     * @param string $zipCode
     *
     * @return WeatherInterface
     */
    public function getWeather($zipCode)
    {
        $encoders = ['json' => new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $data = $this->callApiByZipCode($zipCode);
        return $serializer->deserialize($data, Weather::class, 'json');
    }
}
