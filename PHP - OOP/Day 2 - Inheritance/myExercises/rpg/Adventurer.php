<?php
abstract class Adventurers
{
    public $name;
    public $health;
    public $attack;
    public $defense;
    private $type;
    public $equipment;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = 100;
        $this->attack = 10;
        $this->defense = 5;
    }

    abstract public function attack($opponent);
    abstract public function use_power();

    public function add_equipment($equipment)
    {
        $this->equipment = $equipment;
    }
    public function remove_equipment($equipment)
    {
        $this->$equipment = null;
    }
    public function display_equipment($equipment)
    {
        $this->equipment = $equipment;
    }

}
