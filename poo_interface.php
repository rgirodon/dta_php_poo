<?php
interface Figure {

    const PI = 3.14;
    
    function calculerAire();
    
    function calculerPerimetre();
}

class Cercle implements Figure {

    private $rayon;
    
    function __construct($rayon) {
        
        $this->rayon = $rayon;
    }
    
    function calculerAire() {
        
        return Cercle::PI * $this->rayon * $this->rayon;
    }
    
    function calculerPerimetre() {
        
        return 2 * Cercle::PI * $this->rayon;
    }
}

class Carre implements Figure {

    private $cote;
    
    function __construct($cote) {
        
        $this->cote = $cote;
    }
    
    function calculerAire() {
        
        return $this->cote * $this->cote;
    }
    
    function calculerPerimetre() {
        
        return 4 * $this->cote;
    }
}

class FigureDisplayer {
    
    function displayFigure(Figure $figure) {
        
        echo "Cette figure possède une aire de ".$figure->calculerAire()." et un périmètre de ".$figure->calculerPerimetre().".";
        
        echo "<br><br>";
    }
}

$cercle1 = new Cercle(5);

$carre1 = new Carre(5);

$displayer = new FigureDisplayer();

$displayer->displayFigure($cercle1);

$displayer->displayFigure($carre1);