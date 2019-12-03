<?php
namespace Dta\Domain;

class JeuVideo {

    public $titre;

    function __construct($titre) {

        $this->titre = $titre;
    }

    public function afficher() {

        echo "  <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">".$this->titre."</h5>            
                    </div>
                </div>";
    }
}