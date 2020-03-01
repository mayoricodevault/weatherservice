<?php

namespace App\Models;

use App\Contracts\WeatherInterface;

class Weather implements WeatherInterface
{

    /**
     * @var array
     */
    private $coord;
    
    /**
     * @var array
     */
    private $weather;
    
    /**
     * @var string
     */
    private $base;
    
    /**
     * @var array
     */
    private $main;
    
    /**
     * @var int
     */
    private $visibility;
    
    /**
     * @var array
     */
    public $wind;
    
    /**
     * @var array
     */
    private $clouds;
    
    /**
     * @var int
     */
    private $dt;
    
    /**
     * @var array
     */
    private $sys;
    
    /**
     * @var int
     */
    private $timezone;
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var int
     */
    private $cod;

    /**
     * Get the value of coord
     *
     * @return  array
     */
    public function getCoord()
    {
        return $this->coord;
    }

    /**
     * Set the value of coord
     *
     * @param  array  $coord
     *
     * @return  self
     */
    public function setCoord(array $coord)
    {
        $this->coord = $coord;

        return $this;
    }

    /**
     * Get the value of weather
     *
     * @return  array
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * Set the value of weather
     *
     * @param  array  $weather
     *
     * @return  self
     */
    public function setWeather(array $weather)
    {
        $this->weather = $weather;

        return $this;
    }

    /**
     * Get the value of base
     *
     * @return  string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     *
     * @param  string  $base
     *
     * @return  self
     */
    public function setBase(string $base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of main
     *
     * @return  array
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set the value of main
     *
     * @param  array  $main
     *
     * @return  self
     */
    public function setMain(array $main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get the value of visibility
     *
     * @return  int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     *
     * @param  int  $visibility
     *
     * @return  self
     */
    public function setVisibility(int $visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get the value of wind
     *
     * @return  array
     */
    public function getWind()
    {
        return $this->wind;
    }

    /**
     * Set the value of wind
     *
     * @param  array  $wind
     *
     * @return  self
     */
    public function setWind(array $wind)
    {
        $this->wind = $wind;

        return $this;
    }

    /**
     * Get the value of clouds
     *
     * @return  array
     */
    public function getClouds()
    {
        return $this->clouds;
    }

    /**
     * Set the value of clouds
     *
     * @param  array  $clouds
     *
     * @return  self
     */
    public function setClouds(array $clouds)
    {
        $this->clouds = $clouds;

        return $this;
    }

    /**
     * Get the value of dt
     *
     * @return  int
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set the value of dt
     *
     * @param  int  $dt
     *
     * @return  self
     */
    public function setDt(int $dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get the value of sys
     *
     * @return  array
     */
    public function getSys()
    {
        return $this->sys;
    }

    /**
     * Set the value of sys
     *
     * @param  array  $sys
     *
     * @return  self
     */
    public function setSys(array $sys)
    {
        $this->sys = $sys;

        return $this;
    }

    /**
     * Get the value of timezone
     *
     * @return  int
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set the value of timezone
     *
     * @param  int  $timezone
     *
     * @return  self
     */
    public function setTimezone(int $timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of cod
     *
     * @return  int
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set the value of cod
     *
     * @param  int  $cod
     *
     * @return  self
     */
    public function setCod(int $cod)
    {
        $this->cod = $cod;

        return $this;
    }
}
