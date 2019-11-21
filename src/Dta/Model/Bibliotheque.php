<?php
namespace Dta\Model;

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