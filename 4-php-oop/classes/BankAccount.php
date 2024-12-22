<?php

class BankAccount
{
    private $accountName;
    private $balance = 0;
    public function __construct($name, $balance)
    {
        $this->accountName = $name;
        $this->balance += $balance;
    }
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this->accountName . " deposited amount of " . $amount . " RM";
    }
    public function onlineDeposit($where, $amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this->accountName . " deposited amount of " . $amount . " RM from " . $where;
    }
    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
        return $this->accountName . " withdraw amount of " . $amount . " RM ";
    }
    public function transfer($to, $amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
        return $this->accountName . " transfer amount of " . $amount . " RM to " . $to;
    }
    public function getBalance()
    {
        return $this->accountName . " has amount of " . $this->balance . " RM";
    }
}
