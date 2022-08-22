<?php

class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;

    function __construct($vol, $brand, $temp)
    {
        $this->volume = $vol;
        $this->quantity = $vol;
        $this->brand = $brand;
        $this->temperature = $temp;
    }

    public function reHeat($degree)
    {
        $this->temperature += $degree;
        echo "Coffee has been re-heated. Current temperature : $this->temperature<br>";
    }

    public function coolDown($degree)
    {
        $this->temperature -= $degree;
        echo "Coffee has been cooldown. Current temperature : $this->temperature<br>";
    }





    function getVolume()
    {
        return $this->volume;
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

    function sip($sip)
    {
        if ($this->quantity > $sip) {
            $this->quantity -= $sip;
        } else {
            $this->quantity = 0;
        }
        echo "coffe left $this->quantity cl<br>";
    }

    public function refill()
    {
        $this->quantity = $this->volume;
    }
}
