<?php
class Human
{
    private $name;
    public $hairColor;
    public $gender;
    public $height;

    public function __construct($name, $hairColor, $gender, $height)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->gender = $gender;
        $this->height = $height;
    }

    public function __toString()
    {
        return "Name : $this->name<br>
        Hair Colour : $this->hairColor<br>
        Gender : $this->gender<br>
        Height : $this->height cm<br><br>";
    }
}
