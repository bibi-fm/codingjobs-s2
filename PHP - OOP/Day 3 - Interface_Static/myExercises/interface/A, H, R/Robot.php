<?php

class Robot implements IWork
{
    public $id;
    public $color;

    public function __construct($id, $c)
    {
        $this->id = $id;
        $this->color = $c;
    }

    public function work()
    {
        echo 'Robot n° ' . $this->id . ' is working<br>';
    }
}
