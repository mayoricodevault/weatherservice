<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Facades\WeatherClient;
use Illuminate\Support\Facades\Cache;

class WeatherTest extends TestCase
{

    /**
     * Test wind endpoint with a valid zip code.
     *
     * @return void
     */
    public function test_wind_endpoint_with_a_valid_zip_code()
    {
        // Mock WeatherClient using Facade
        // It should receive a call to: getWeather('91761')
        $zipCode = '91761';
        WeatherClient::shouldReceive('getWeather')->once()->with($zipCode);

        // Call to the wind api
        $response = $this->json('get', route('api.wind', ['zipCode' => $zipCode]));
        $response->assertStatus(200);
    }

    /**
     * Test wind endpoint with an invalid zip code.
     *
     * @return void
     */
    public function test_wind_endpoint_with_an_invalid_zip_code()
    {
        $zipCode = '591';
        // Call to the wind api
        $response = $this->json('get', route('api.wind', ['zipCode' => $zipCode]));

        // Assert status 422 Invalid Data
        $response->assertStatus(422);
    }

    /**
     * Test weather call is cached
     *
     * @return void
     */
    public function test_wind_endpoint_cache()
    {
        // Mock Cache
        // It should receive a call to: remember()
        $zipCode = '91761';
        $key = "weather.{$zipCode}";
        $minutes = config('weather.cache_minutes', 15);
        Cache::shouldReceive('remember')
            ->once()
            ->with($key, $minutes, \Closure::class)
            ->andReturn([]);

        // Call to the wind api
        $this->json('get', route('api.wind', ['zipCode' => $zipCode]));
    }
}
