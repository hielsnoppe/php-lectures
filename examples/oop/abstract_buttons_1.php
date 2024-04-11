<?php

interface Button {
    function getText(): string;
    function getColor(): string;
    // neu:
    function getHtml(): string;
}

class RedButton implements Button {
    function getText(): string { return "Nicht drücken!"; }
    function getColor(): string { return "#ff0000"; }
    // aus der Funktion renderButton übernommen:
    function getHtml(): string {
        $style = 'font-size: 5em; background-color: ' . $this->getColor();
        return '<button style="' . $style . '">'
            . $this->getText()
            . '</button>';
    }
}

$button = new RedButton();
echo($button->getHtml());