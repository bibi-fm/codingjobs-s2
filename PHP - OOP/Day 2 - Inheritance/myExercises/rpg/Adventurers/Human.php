<?php
class Human extends Adventurer
{
    //he only has his fists (no weapons), he get a +3 attack bonus
    //They use their power to take +20 life points
    function usePower()
    {
        $this->health += 20;
        if ($this->equipment = null) {
            $this->attack += 3;
        }
    }
}
