<?php
namespace Dta\Model;

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