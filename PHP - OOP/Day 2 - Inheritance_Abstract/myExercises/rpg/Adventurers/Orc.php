<?php
class Orc extends Adventurers
{
    //+20 defense points but -10 attack
    //If they attack an elf, which has no shield, Elf loose 50 life points
    public function use_power()
    {
        $this->defense += 20;
        $this->attack -= 10;
    }
    public function attack($opponent)
    {
        if ($opponent->type = 'elf') {
            return $opponent->health = $opponent->health - 50;
        } else {
            return $opponent->health = $opponent->health - $this->attack;
        }
    }
}
