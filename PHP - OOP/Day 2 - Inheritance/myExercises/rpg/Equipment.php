<?php
class Equipment {
    public $name;
    public $type;
    public $attackBonus;
    public $defenseBonus;
    public $healthBonus;

    public function __construct($n, $t, $atkB,$defB, $hpB)
    {
        $this->name = $n;
        $this->type = $t;
        $this->attackBonus = $atkB;
        $this->defenseBonus = $defB;
        $this->healthBonus = $hpB;
    }
}