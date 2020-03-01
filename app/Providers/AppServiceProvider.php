<?php

namespace App\Providers;

use App\Clients\CachedWeatherClient;
use App\Clients\WeatherClient;
use App\Contracts\WeatherClientInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WeatherClientInterface::class, function () {
            return new CachedWeatherClient(new WeatherClient);
        });
    }
}
