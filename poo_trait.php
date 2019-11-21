<?php

trait Positionnable {
    
    public $x;
    
    public $y;
    
    public function move($x, $y) {
        
        $this->x += $x;
        
        $this->y += $y;
    }
    
    public function displayPosition() {
        
        echo "Coordonnées : (".$this->x.", ".$this->y.")";
    }
}

trait Identifiable {
    
    public $identifier;
    
    public function displayIdentification() {
        
        echo "Identification : ".$this->identifier." ";
    }
}

class Sprite {
    
    use Positionnable, Identifiable;
    
    function __construct($identifier, $x, $y) {
        
        $this->identifier = $identifier;
        
        $this->x = $x;
        
        $this->y = $y;
    }
}

class Cercle {

    use Positionnable, Identifiable;
    
    private $rayon;
    
    function __construct($identifier, $x, $y, $rayon) {
        
        $this->identifier = $identifier;
        
        $this->x = $x;
        
        $this->y = $y;
        
        $this->rayon = $rayon;
    }
}

$cercle1 = new Cercle("c1", 0, 0, 10);

$cercle1->move(12, -5);

$cercle1->displayIdentification();

$cercle1->displayPosition();

echo "<br><br>";

$sprite1 = new Sprite("s1", 0, 0);

$sprite1->move(1, 1);

$sprite1->displayIdentification();

$sprite1->displayPosition();