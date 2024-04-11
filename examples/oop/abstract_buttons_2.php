<?php

interface Button {
    function getText(): string;
    function getColor(): string;

    function getHtml(): string;
}

class RedButton implements Button {
    function getText(): string { return "Nicht drücken!"; }
    function getColor(): string { return "#ff0000"; }
    function getHtml(): string {
        $style = 'font-size: 5em; background-color: ' . $this->getColor();
        return '<button style="' . $style . '">'
            . $this->getText()
            . '</button>';
    }
}

// Neuer Button in Blau:
// Genauso wie RedButton, aber mit anderer Farbe
class BlueButton implements Button {
    function getText(): string { return "I'm Blue..."; }
    function getColor(): string { return "#0000ff"; } // Blaue Farbe

    // Gleiche getHtml() Methode wie bei RedButton
    // Wiederholung! :-(
    function getHtml(): string {
        $style = 'font-size: 5em; background-color: ' . $this->getColor();
        return '<button style="' . $style . '">'
            . $this->getText()
            . '</button>';
    }
}

$button1 = new RedButton();
$button2 = new BlueButton(); // neu
echo($button1->getHtml());
echo($button2->getHtml()); // neu