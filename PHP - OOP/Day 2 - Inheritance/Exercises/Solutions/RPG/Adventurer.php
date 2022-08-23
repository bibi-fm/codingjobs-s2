<?php

abstract class Adventurer
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    // Private because we need to check if Orc/Human/Elf
    public $equipment;
    public $powerUsed;

    public function __construct($n)
    {
        $this->name = $n;
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->powerUsed = false;
    }

    // Abstract methods
    abstract public function attack($opponent);
    abstract public function usePower();

    // Handle equipment 
    // Dependency injection
    public function add_equipment($equipment)
    {
        $this->equipment = $equipment;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }
}
