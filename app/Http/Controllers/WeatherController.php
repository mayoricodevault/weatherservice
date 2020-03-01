<?php

namespace App\Http\Controllers;

use App\Contracts\WeatherClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WeatherController extends Controller
{
    /**
     * Returns current weather information for the user
     * by zip code
     * @param $zipCode
     * @param WeatherClientInterface $client
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function wind($zipCode, WeatherClientInterface $client, Request $request)
    {
        $validator = Validator::make(
            ['zipCode' => $zipCode],
            ['zipCode' => 'required|postal_code:US'],
        );
        $res = $validator->fails() ? $validator->errors() : $client->getWeather($zipCode);
        $status = $validator->fails() ? 422 : 200;
        return response()->json($res, $status);

    }

}
