<?php

interface Button {
    /**
     * return text: string
     */
    function getText(): string;
    /**
     * return color: string in format #XXXXXX
     */
    function getColor(): string;
}








class DanielButton implements Button {
 
    private $text;
    private $farbe;

    function __construct($text, $farbe) {
        $this->text = $text;
        $this->farbe = $farbe;
    }

    function getText(): string {
        return $this -> text;
    }

    function getColor(): string {
        return $this -> farbe;
    }
}

class DbButton implements Button { 

    private $text;
    private $farbe;

    function __construct($text, $farbe) {
        $this -> text = $text;
        $this -> farbe = $farbe;
    }

    function getText(): string {
        return $this -> text;
    }

    function getColor(): string {
        return $this -> farbe;
    }

}

class MartinasButton implements Button{
    private $text;
    private $farbe;

    function __construct($text, $farbe) {
        $this->text = $text;
        $this->farbe = $farbe;
    }
    function getText(): string {
        return $this->text;
    }
    function getColor(): string {
        return $this->farbe;
    } 
}

class InesButton implements Button{
    public $text = "";
    public $color = "";
     function __construct($text, $color) {
         $this->text = $text;
         $this->color = $color;
       }
     function getText() : string{
         return $this-> text;# = $text;
     }
        
     function getColor() : string{
         return $this-> color;# = $color;
     }
 }

class DavidButton implements Button {
   
    public $string;
    public $color;
    

    
    public function __construct($string, $color, ) {
        $this->string = $string;
        $this->color = $color;
        }
        function getText(): string {
            return $this->string;
        }
        function getColor(): string {
            return $this->color;
}
}












function renderButton (Button $button): string {
    $style = 'font-size: 5em; background-color: ' . $button->getColor();
    return '<button style="' . $style . '">'
        . $button->getText()
        . '</button>';
}

$defaultColor = "#e120c0"; // random color

$buttons = [
    "Daniel" => new DanielButton("Daniel", $defaultColor),
    "Dimitrij" => new DbButton('buttontext', '#ff0000'),
    "Martina" => new MartinasButton("Hier klicken", "#228B22"),
    "Ines" => new InesButton("Hallö", "#ff00ff"),
    "David" => new DavidButton("das ist ein button", $defaultColor),
];

foreach ($buttons as $author => $button) {
    echo($author);
    echo(renderButton($button));
    echo('<br>');
}

?>