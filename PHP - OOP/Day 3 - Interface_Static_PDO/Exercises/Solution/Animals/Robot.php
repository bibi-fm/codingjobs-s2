<?php

class Robot implements IWorker
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
        echo 'Robot id : ' . $this->id . ' is working<br>';
    }
}
