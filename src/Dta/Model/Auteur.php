<?php
namespace Dta\Model;

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