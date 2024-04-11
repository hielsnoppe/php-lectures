<?php

class MyAccount implements BankAccount {

    private float $balance;

    function __construct($balance = 0) {
        if ($balance < 0) throw new Exception('Initial balance must be positive.');

        $this->balance = $balance;
    }
    
    function deposit(float $amount) {
        if ($amount < 0) throw new Exception('Deposited amount must be positive.');

        $this->balance += $amount;
    }

    function withdraw(float $amount) {
        if ($amount < 0) throw new Exception('Withdrawn amount must be positive.');
        if ($amount > $this->balance) throw new Exception('Insufficient funds.');

        $this->balance -= $amount;
    }

    function balance(): float {
        return $this->balance;
    }

    function transfer(float $amount, BankAccount $target) {

        $this->withdraw($amount);
        $target->deposit($amount);
    }
}