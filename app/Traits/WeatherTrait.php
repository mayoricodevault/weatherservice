<?php

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

trait WeatherTrait
{
    /**
     * Call an HTTP request
     *
     * @param string $method
     * @param string $url
     *
     * @return array
     *
     * @throws GuzzleException
     */
    private function call($method, $url)
    {
        $client = new Client();
        $request = new Request($method, $url);
        $response = $client->send($request);
        $content = $response->getBody()->getContents();
        return $content;
    }

    /**
     * Get weather by zip code
     *
     * @param string $zipCode
     *
     * @return array
     *
     * @throws GuzzleException
     */
    private function callApiByZipCode($zipCode)
    {
        $appid = config('weather.api_key');
        $api = sprintf(config('weather.end_point'), $zipCode, $appid);
        return $this->call('get', $api);
    }
}