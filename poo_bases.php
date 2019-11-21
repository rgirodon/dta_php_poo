<?php
class Auteur  {
    
    public $firstName;
    
    public $lastName;
    
    function __construct($firstName, $lastName) {
    
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;
    }
    
    function getFullName() {
        
        return $this->firstName." ".$this->lastName;
    }
}

class Livre {
    
    public $titre;
    
    public $auteur;
    
    public $dateParution;
    
    function __construct($titre, $auteur, $dateParution) {
        
        $this->titre = $titre;
        
        $this->auteur = $auteur;
        
        $this->dateParution = $dateParution;
    }
    
    function getFullDescription() {
        
        return $this->titre." written by ".$this->auteur->getFullName()." in ".$this->dateParution;
    }
}

class Bibliotheque {
    
    public $nom;
    
    public $livresDisponibles;
    
    public $livresEnPret;
    
    function __construct($nom) {
        
        $this->nom = $nom;
        
        $this->livresDisponibles = [];
        
        $this->livresEnPret = [];
    }
    
    function afficherEtat() {
        
        echo $this->nom.' : '.sizeof($this->livresEnPret).' livres prêtés / '.sizeof($this->livresDisponibles).' livres disponibles';
    }
        
    function ajouterLivre($livre) {
        
        array_push($this->livresDisponibles, $livre);
    }
        
    function preterLivre($livre) {
        
        // search livre in livresDisponibles
        $index = array_search($livre, $this->livresDisponibles);
        
        if ( $index !== false ) {
            
            // remove livre from livresElivresDisponiblesnPret
            array_splice($this->livresDisponibles, $index, 1);
            
            // add livre to livresDisponibles
            array_push($this->livresEnPret, $livre);
        }
    }
          
    function retournerLivre($livre) {
        
        // search livre in livresEnPret
        $index = array_search($livre, $this->livresEnPret);
        
        if ( $index !== false ) {
            
            // remove livre from livresEnPret
            array_splice($this->livresEnPret, $index, 1);
            
            // add livre to livresDisponibles
            array_push($this->livresDisponibles, $livre);
        }
    }
}

$auteur1 = new Auteur("Victor", "Hugo");

$livre1 = new Livre("Les Misérables", $auteur1, 1862);

$auteur2 = new Auteur("Albert", "Camus");

$livre2 = new Livre("La peste", $auteur2, 1947);

$bibliotheque1 = new Bibliotheque("BU Tréfilerie");

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->ajouterLivre($livre1);

$bibliotheque1->ajouterLivre($livre2);

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->preterLivre($livre1);

$bibliotheque1->preterLivre($livre2);

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->retournerLivre($livre1);

$bibliotheque1->afficherEtat();