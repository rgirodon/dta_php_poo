<?php
namespace Dta\Domain;

class Figurine {

    public $nom;

    function __construct($nom) {

        $this->nom = $nom;
    }

    public function afficher() {

        echo "  <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">".$this->nom."</h5>            
                    </div>
                </div>";
    }
}