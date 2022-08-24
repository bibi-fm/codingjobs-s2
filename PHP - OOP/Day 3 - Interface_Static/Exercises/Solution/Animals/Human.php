<?php

class Human extends LivingBeing implements IWorker
{
    public function work()
    {
        echo $this->name . ' is working<br>';
    }

    public function make_noise()
    {
        echo 'Hello, my name is ' . $this->name . '<br>';
    }
}
