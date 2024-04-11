<?php

// Aus der vorherigen Übung:

interface Button {
    function getText(): string;
    function getColor(): string;
}

class RedButton implements Button {
    function getText(): string { return "Nicht drücken!"; }
    function getColor(): string { return "#ff0000"; }
}

function renderButton (Button $button): string {
    $style = 'font-size: 5em; background-color: ' . $button->getColor();
    return '<button style="' . $style . '">'
        . $button->getText()
        . '</button>';
}

$button = new RedButton();
echo(renderButton($button));