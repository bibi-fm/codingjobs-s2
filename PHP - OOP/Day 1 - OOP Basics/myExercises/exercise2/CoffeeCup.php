<?php
class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;

    public function __construct($brand, $temp, $vol)
    {
        $this->quantity = $vol;
        $this->brand = $brand;
        $this->temperature = $temp;
        $this->volume = $vol;
    }

    /*
    public function set_quantity($q)
    {
        if (is_numeric($q)) {
            $this->quantity = $q;
        } else {
            echo 'Quantity must be a numeric value.<br>';
        }
    }

    public function set_brand($b)
    {
        $this->brand = $b;
    }

    public function set_temperature($t)
    {
        if (is_numeric($t)) {
            $this->temperature = $t;
        } else {
            echo 'Quantity must be a numeric value.<br>';
        }
    }*/


    public function get_quantity()
    {
        return $this->quantity . '<br>';
    }
    public function get_brand()
    {
        return $this->brand . '<br>';
    }
    public function get_temperature()
    {
        return $this->temperature . '<br>';
    }

    public function sip($amount)
    {
        if ($this->quantity === 0 || $this->quantity - $amount === 0) {
            return 'You drank all the coffee. A refill is in order.<br>';
        } else {
            return $this->quantity - $amount . 'cl of coffee remaining.<br>';
        }
    }

    public function refill($cup)
    {
        $cup = $this->quantity;
        //echo gettype($cup);
        if ($cup === 0) {
            return 'Mug full again.<br>';
        } else {
            return 'Cup still has liquid inside.<br>';
        }
    }

    public function volume()
    {
        return "This mug's maximum volume is " . $this->volume . ' cl.<br>';
    }

    public function reHeat($deg)
    {
        $this->temperature += $deg;
        echo "Coffee has been reheated. Current temperature: $this->temperature.<br>";

    }
    public function coolDown($deg)
    {
        $this->temperature -= $deg;
        echo "Coffee has cooled down. Current temperature: $this->temperature.<br>";
    }
}
