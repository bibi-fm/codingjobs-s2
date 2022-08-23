<?php

class Human {
    public $name;
    public $color;
    public $gender;
    public function __construct($c, $n, $g){
        $this->color = $c;
        $this->name = $n;
        $this->gender = $g;
    }
    public function work(){
        echo "$this->name working...<br>";
    }
}
/*$human = new Human('white', 'Jon');
$robot = new Robot('grey', '#8569');

echo $human->get_name();
echo $robot->get_id();*/