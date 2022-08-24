<?php

class Orc extends Adventurer
{
    public function attack($opponent)
    {
        // Check if opponent is an ELF ?
        if (get_class($opponent) == 'Elf') {
            if ($opponent->equipment != null && $opponent->equipment->type != 'Shield') {
                $opponent->healthPoints -= 50;
            }
        } else
            $opponent->healthPoints -= $this->atkPoints;
    }

    public function usePower()
    {
        if ($this->powerUsed == false) {
            $this->defPoints += 20;
            $this->atkPoints -= 10;
            $this->powerUsed = true;
            echo 'Power has been used<br>';
        } else
            echo 'Power already used<br>';
    }
}
