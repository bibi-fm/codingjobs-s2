<?php

class Elf extends Adventurer
{
    public function attack($opponent)
    {
        if ($this->equipment != null && $this->equipment->type == 'Sword') {
            $totalAtk = $this->atkPoints + 2;
            $opponent->healthPoints -= $totalAtk;
        } else
            $opponent->healthPoints -= $this->atkPoints;
    }

    public function usePower()
    {
        if ($this->powerUsed == false) {
            $this->defPoints += 3;
            $this->powerUsed = true;
            echo 'Power has been used<br>';
        } else
            echo 'Power already used<br>';
    }
}
