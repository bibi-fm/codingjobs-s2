<?php

class Character
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    // Private because we need to check if Orc/Human/Elf
    private $type;

    public function __construct($n, $t)
    {
        $this->name = $n;
        $this->set_type($t);
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
    }

    public function set_type($type)
    {
        if ($type == 'Orc' || $type == 'Elf' || $type == 'Human')
            $this->type = $type;
        else
            echo 'Type must be Orc/Elf/Human<br>';
    }
}
