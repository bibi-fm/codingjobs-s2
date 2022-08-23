<?php
class Animal
{
    protected $legs;
    protected $color;
    protected $gender;
    protected $name;

    public function __construct($l, $c, $g, $n)
    {
        $this->legs = $l;
        $this->color = $c;
        $this->gender = $g;
        $this->name = $n;
    }
    
    public function get_legs()
    {
        return $this->legs . '<br>';
    }
    public function get_color()
    {
        return $this->color . '<br>';
    }
    public function get_gender()
    {
        return $this->gender . '<br>';
    }
    public function get_name()
    {
        return $this->name . '<br>';
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo 'Woof';
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo 'Meow';
    }
}
