<?php
class Character
{
    public $name;
    public $health;
    public $attack;
    public $defense;
    private $type;
    private $equipment;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = 100;
        $this->attack = 10;
        $this->defense = 5;
    }

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
