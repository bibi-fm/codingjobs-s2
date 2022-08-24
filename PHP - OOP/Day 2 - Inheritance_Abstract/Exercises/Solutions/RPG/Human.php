<?php

class Human extends Adventurer
{
    public function attack($opponent)
    {
        if ($this->equipment == null) {
            $totalAtk = $this->atkPoints + 3;
            $opponent->healthPoints -= $totalAtk;
        } else {
            $opponent->healthPoints -= $this->atkPoints;
        }
    }

    public function usePower()
    {
        if ($this->powerUsed == false) {
            $this->healthPoints += 20;
            $this->powerUsed = true;
            echo 'Power has been used<br>';
        } else
            echo 'Power already used<br>';
    }
}
