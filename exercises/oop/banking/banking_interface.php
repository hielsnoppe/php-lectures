<?php

interface BankAccount {
    function deposit(float $amount);
    function withdraw(float $amount);
    function balance(): float;
    function transfer(float $amount, BankAccount $target);
}