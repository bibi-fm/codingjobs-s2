<?php
class Robot {
    public $identifier;
    public $color;
    public function __construct($c, $id){
        $this->color = $c;
        $this->identifier = $id;
    }
    public function work(){
        echo "$this->identifier working...<br>";
    }
}