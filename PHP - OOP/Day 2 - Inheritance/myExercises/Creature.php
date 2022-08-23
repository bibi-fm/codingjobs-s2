<?php 
class Creature{

    private $color;

    public function __construct($c){
        $this->color = $c;
    }
    public function work(){
        echo 'Working...';
    }
    public function get_color(){
        return $this->color;
    }
}

class Human extends Creature {
    private $name;
    public function __construct($c, $n){
        parent::__construct($c);
        $this->name = $n;
    }
    public function get_name(){
        return $this->name;
    }
}
class Robot extends Creature {
    private $identifier;
    public function __construct($c, $id){
        parent::__construct($c);
        $this->identifier = $id;
    }
    public function get_id(){
        return $this->identifier;
    }
}