<?php

class Human
{
    private $name;
    public $hairColor;
    public $gender;
    public $height;

    public function __construct($n, $hc, $g, $h)
    {
        $this->name = $n;
        $this->hairColor = $hc;
        $this->gender = $g;
        $this->height = $h;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function __toString()
    {
        return "Name : $this->name<br>
        Hair Color : $this->hairColor<br>
        Gender : $this->gender<br>
        Height : $this->height<br>";
    }
}
