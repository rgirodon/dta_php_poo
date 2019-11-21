<?php
abstract class Personne {

    protected $firstName;    
    protected $lastName;
    
    function __construct($firstName, $lastName) {
        
        $this->firstName = $firstName;        
        $this->lastName = $lastName;
    }
    
    public function sayHello() {
        
        echo "Bonjour, je suis ".$this->getFullName().".";
        
        echo " Je suis ".$this->getMetier().".";
    }
    
    final protected function getFullName() {
        
        return $this->firstName." ".$this->lastName;
    }
    
    abstract protected function getMetier();
}

class Auteur extends Personne {

    protected $livres;
    
    function __construct($firstName, $lastName) {
        
        parent::__construct($firstName, $lastName);        
        $this->livres = [];
    }
    
    public function sayHello() {
        
        parent::sayHello();        
        echo " J'ai écrit ".count($this->livres)." livre(s).";
    }
    
    public function ecrireLivre($livre) {
        
        $this->livres[] = $livre;
    }
    
    protected function getMetier() {
        
        return "Auteur";
    }
}

$auteur1 = new Auteur("Victor", "Hugo");

$auteur1->ecrireLivre("Les Misérables");

$auteur1->sayHello();