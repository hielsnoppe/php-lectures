<?php

include_once('banking_interface.php');
include_once('banking_class.php');

function println(...$str) { echo(implode(' ', $str) . "\n"); }


$donald = new MyAccount();
$dagobert = new MyAccount();

println('Donald:', $donald->balance(), 'Dagobert:', $dagobert->balance());

$donald->deposit(100);
$dagobert->deposit(1000);

println('Donald:', $donald->balance(), 'Dagobert:', $dagobert->balance());

try {
    $donald->withdraw(500);
}
catch (Exception $e) {
    println($e->getMessage());
}
$dagobert->withdraw(500);

println('Donald:', $donald->balance(), 'Dagobert:', $dagobert->balance());

$donald->transfer(50, $dagobert);

println('Donald:', $donald->balance(), 'Dagobert:', $dagobert->balance());