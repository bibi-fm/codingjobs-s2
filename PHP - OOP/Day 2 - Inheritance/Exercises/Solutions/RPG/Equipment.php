<?php

class Equipment
{
    public $name;
    public $type;
    public $bonusHealth;
    public $bonusAtk;
    public $bonusDef;

    public function __construct($n, $t, $bH, $bA, $bD)
    {
        $this->name = $n;
        $this->type = $t;
        $this->bonusHealth = $bH;
        $this->bonusAtk = $bA;
        $this->bonusDef = $bD;
    }
}
