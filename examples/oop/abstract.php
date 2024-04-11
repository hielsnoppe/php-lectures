<?php

// Das Interface Auto beschreibt, was ein Auto können muss
interface Auto {
    function fahren();
}

// Die abstrakte Klasse Fahrgestell implementiert
// ein "unfertiges" Auto (Methode "fahren" fehlt, kann also nicht fahren)
abstract class Fahrgestell implements Auto {}

// Die Klasse FiatDucato erweitert (extends) die Klasse Fahrgestell
// und implementiert die Methode "fahren", kann also jetzt fahren
// und ist deswegen ein "fertiges" Auto.
class FiatDucato extends Fahrgestell {
    function fahren() {
        echo("Brumm Brumm! Ich bin ein Fiat!");
    }
}

// Die Klasse PeugeotDucato erweitert (extends) ebenfalls die Klasse Fahrgestell
// und implementiert die Methode "fahren", kann also auch fahren
// und ist deswegen ein "fertiges" Auto.
class PeugeotBoxer extends Fahrgestell {
    function fahren() { echo("Brümm Brümm! Je suis un Peugeot!"); }
}

// abstract class => new funktioniert nicht!
$auto = new Fahrgestell(); // geht nicht!
// "normale" Klassen können instanziiert werden:
$ducato = new FiatDucato(); // das geht
$boxer = new PeugeotBoxer(); // das auch