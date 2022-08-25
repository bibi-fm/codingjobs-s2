<?php

class Flower
{
    public $name;
    public $price;

    public function set_flower($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function get_flower()
    {
        return $this->name . '<br> <strong>Price: </strong>' . $this->price;
    }

}
