<?php

/*
    INHERITANCE

    Inheritance represents a relastionship between classes.
    In a form of parent/child relationship.

    Children will benefits from the parent (properties & methods).
    A class can only inherit from one parent.
    Different children can inherit from the same parent.

    The parent share properties/methods by using 'protected' visibility. 
    The parent can keep things private by using 'private' visibility.

    Children can also have more properties than the parent.
*/

class Vehicle
{
    // Properties children can access
    protected $nbWheels;
    protected $manufacturer;

    public function __construct($w, $m)
    {
        $this->nbWheels = $w;
        $this->manufacturer = $m;
    }

    public function horn()
    {
        echo 'Tuut tuuut!<br>';
    }
}

$myVehicle = new Vehicle(4, 'Toyota');

// Car inherits from Vehicle
class Car extends Vehicle
{
    private $nbDoors;

    public function __construct($w, $m, $d)
    {
        parent::__construct($w, $m);
        $this->nbDoors = $d;
    }

    public function slam_the_door()
    {
        echo 'Bang<br>';
    }
}

$myCar = new Car(4, 'Audi', 3);
$myCar->horn();
$myCar->slam_the_door();

var_dump($myCar);


class MotorBike extends Vehicle
{

    public function __construct($m)
    {
        parent::__construct(2, $m);
    }
}

$myMoto = new MotorBike('Yamaha');
var_dump($myMoto);
