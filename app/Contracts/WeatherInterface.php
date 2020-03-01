<?php


namespace App\Contracts;


interface WeatherInterface
{

    /**
     * Get the value of coord
     *
     * @return  array
     */
    public function getCoord();

    /**
     * Set the value of coord
     *
     * @param  array  $coord
     *
     * @return  self
     */
    public function setCoord(array $coord);

    /**
     * Get the value of weather
     *
     * @return  array
     */
    public function getWeather();

    /**
     * Set the value of weather
     *
     * @param  array  $weather
     *
     * @return  self
     */
    public function setWeather(array $weather);

    /**
     * Get the value of base
     *
     * @return  string
     */
    public function getBase();

    /**
     * Set the value of base
     *
     * @param  string  $base
     *
     * @return  self
     */
    public function setBase(string $base);

    /**
     * Get the value of main
     *
     * @return  array
     */
    public function getMain();

    /**
     * Set the value of main
     *
     * @param  array  $main
     *
     * @return  self
     */
    public function setMain(array $main);

    /**
     * Get the value of visibility
     *
     * @return  int
     */
    public function getVisibility();

    /**
     * Set the value of visibility
     *
     * @param  int  $visibility
     *
     * @return  self
     */
    public function setVisibility(int $visibility);

    /**
     * Get the value of wind
     *
     * @return  array
     */
    public function getWind();

    /**
     * Set the value of wind
     *
     * @param  array  $wind
     *
     * @return  self
     */
    public function setWind(array $wind);

    /**
     * Get the value of clouds
     *
     * @return  array
     */
    public function getClouds();

    /**
     * Set the value of clouds
     *
     * @param  array  $clouds
     *
     * @return  self
     */
    public function setClouds(array $clouds);

    /**
     * Get the value of dt
     *
     * @return  int
     */
    public function getDt();

    /**
     * Set the value of dt
     *
     * @param  int  $dt
     *
     * @return  self
     */
    public function setDt(int $dt);

    /**
     * Get the value of sys
     *
     * @return  array
     */
    public function getSys();

    /**
     * Set the value of sys
     *
     * @param  array  $sys
     *
     * @return  self
     */
    public function setSys(array $sys);

    /**
     * Get the value of timezone
     *
     * @return  int
     */
    public function getTimezone();

    /**
     * Set the value of timezone
     *
     * @param  int  $timezone
     *
     * @return  self
     */
    public function setTimezone(int $timezone);

    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId();

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */
    public function setId(int $id);

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName();

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name);

    /**
     * Get the value of cod
     *
     * @return  int
     */
    public function getCod();

    /**
     * Set the value of cod
     *
     * @param  int  $cod
     *
     * @return  self
     */
    public function setCod(int $cod);
}