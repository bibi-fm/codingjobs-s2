<?php

class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;

    function __construct()
    {
    }

    function setQuantity($q)
    {
        $this->quantity = $q;
    }
    function setBrand($b)
    {
        $this->brand = $b;
    }
    function setTemperature($t)
    {
        $this->temperature = $t;
    }
    function getQuantity()
    {
        return $this->quantity;
    }
    function getBrand()
    {
        return $this->brand;
    }
    function getTemperature()
    {
        return $this->temperature;
    }
}
