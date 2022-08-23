<?php
class Elf extends Adventurer{
    //+2 bonus attack points for each sword an elf carry
    ///+3 of defense
    public function attack($opponent)
    {
        
    }
    public function use_power()
    {   
        $this->defense += 3;
        if ($this->equipment->type === 'sword'){
            $this->equipment->attackBonus += 2;
        }
    }


    
}