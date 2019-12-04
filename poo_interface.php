<?php
interface Figure {

    const PI = 3.14;

    function getNom();
    
    function calculerAire();
    
    function calculerPerimetre();
}

class Cercle implements Figure {

    private $rayon;
    
    function __construct($rayon) {
        
        $this->rayon = $rayon;
    }
    
    function getNom() {

        return "Cercle";
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

    function getNom() {

        return "Carré";
    }
    
    function calculerAire() {
        
        return $this->cote * $this->cote;
    }
    
    function calculerPerimetre() {
        
        return 4 * $this->cote;
    }
}

class Rectangle implements Figure {

    private $largeur;

    private $longueur;

    function __construct($largeur, $longueur) {

        $this->largeur = $largeur;

        $this->longueur = $longueur;
    }

    function getNom() {

        return "Rectangle";
    }

    function calculerAire() {
        
        return $this->largeur * $this->longueur;
    }
    
    function calculerPerimetre() {
        
        return 2 * ($this->largeur + $this->longueur);
    }
}

class FigureDisplayer {
    
    function displayFigure(Figure $figure) {
        
        echo "Ce ".$figure->getNom()." possède une aire de ".$figure->calculerAire()." et un périmètre de ".$figure->calculerPerimetre().".";
        
        echo "<br><br>";
    }
}

$cercle1 = new Cercle(5);

$carre1 = new Carre(5);

$rectangle1 = new Rectangle(10, 15);

$displayer = new FigureDisplayer();

$displayer->displayFigure($cercle1);

$displayer->displayFigure($carre1);

$displayer->displayFigure($rectangle1);