<?php
class Orc extends Adventurer
{
    //+20 defense points but -10 attack
    //If they attack an elf, which has no shield, Elf loose 50 life points
    function usePower()
    {
        $this->defense += 20;
        $this->attack -= 10;
    }
    function attack($opponent)
    {
        if ($opponent->type = 'elf') {
            return $opponent->health = $opponent->health - 50;
        } else {
            parent::attack($opponent);
        }
    }
}
