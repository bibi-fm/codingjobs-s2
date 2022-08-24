<?php
//require_once '../Adventurer.php';
class Elf extends Adventurers
{
    //+2 bonus attack points for each sword an elf carry
    ///+3 of defense
    public function attack($opponent)
    {
        if ($this->equipment->type === 'sword'){
            $this->equipment->attackBonus += 2;
        } else {
            return $opponent->health = $opponent->health - $this->attack;
        }
    }
    public function use_power()
    {   
        $this->defense += 3;
    }


    
}