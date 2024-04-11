<?php

interface Button {
    function getText(): string;
    function getColor(): string;

    function getHtml(): string;
}

// Abstrakte ("unfertige") Klasse BaseButton implementiert nur getHtml(),
// aber nicht getText() und getColor().
// Das düfern dann die "konkreten" Klassen RedButton und BlueButton machen.
abstract class BaseButton implements Button {
    function getHtml(): string {
        $style = 'font-size: 5em; background-color: ' . $this->getColor();
        return '<button style="' . $style . '">'
            . $this->getText()
            . '</button>';
    }
}

// RedButton erweitert (extends) jetzt BaseButton
class RedButton extends BaseButton {
    function getText(): string { return "Nicht drücken!"; }
    function getColor(): string { return "#ff0000"; }
    // Die Methode getHtml() wird von BaseButton übernommen
}

// BlueButton erweitert (extends) jetzt BaseButton
class BlueButton extends BaseButton {
    function getText(): string { return "I'm Blue..."; }
    function getColor(): string { return "#0000ff"; } // Blaue Farbe
    // Die Methode getHtml() wird von BaseButton übernommen
}

$button1 = new RedButton();
$button2 = new BlueButton();
echo($button1->getHtml());
echo($button2->getHtml());