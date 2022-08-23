<?php
class Human extends Adventurers
{
    //he only has his fists (no weapons), he get a +3 attack bonus
    //They use their power to take +20 life points
    public function attack($opponent)
    {
        if ($this->equipment = null) {
            $this->attack += 3;
        } else {
            return $opponent->health = $opponent->health - $this->attack;
        }
    }
    public function use_power()
    {
        $this->health += 20;
    }
}
