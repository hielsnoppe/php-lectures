<?php

/**
 * OOP = Objekt-Orientierte Programmierung (deutsch)
 *     = Object-Oriented Programming (englisch)
 * 
 * interface Button: Beschreibt, was ein Button können soll,
 * aber nicht wie.
 * 
 * class MeinButton: Implementiert Button interface,
 * d.h. alle geforderten Funktionen.
 */

interface Button {
    /**
     * Gibt den Text zurück.
     */
    function getText(): string;
    /**
     * Gibt die Farbe zurück.
     */
    function getColor(): string;
    /**
     * Erzeugt das passende HTML.
     */
    function getHTML(): string;
}

class OkButton implements Button {

    function getColor(): string {
        return "#00ff00";
    }

    function getText() {
        return "OK";
    }

    function getHTML(): string {
        return "";
    }
}


class IrgendeinButton implements Button {

    private $text;
    private $color;

    function __construct($text, $color) {
        $this->text = $text;
        $this->color = $color;
    }

    function getText(): string {
        return $this->text;
    }

    function getColor(): string {
        return $this->color;
    }

    function getHTML(): string {
        return "";
    }
}

$okButton = new OkButton();
$button2 = new IrgendeinButton("Klick mich!", "#ff0000");

$okButton->getText();
$button2->getText();