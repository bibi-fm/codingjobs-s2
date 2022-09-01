<?php

class ProfessionalAccount extends BankAccount
{
    private $limit;

    public function __construct($newAccNumber, $newAmount, $newLimit)
    {
        $this->limit = $newLimit;
        parent::__construct($newAccNumber, $newAmount);
    }

    public function withdraw($removeAmount)
    {
        $newAmount = $this->amount - $removeAmount;
        if ($newAmount < -$this->limit)
            echo 'Not enough monney on your account.<br>';
        else {
            $this->amount = $newAmount;
            echo "You withdraw $removeAmount € / Left : $this->amount €<br>";
        }
    }
}
