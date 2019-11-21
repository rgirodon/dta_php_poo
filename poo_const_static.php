<?php
class Auteur  {

    const COUNTER_PREFIX = "A ce stade, nb Auteurs instanciés : ";
    
    const HTML_NEW_LINE = "<br><br>";
    
    private static $COUNT = 0;
    
    private $firstName;
    
    private $lastName;
    
    function __construct($firstName, $lastName) {
        
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;
        
        self::incrementCounter();
    }    
    
    private static function incrementCounter() {
        
        self::$COUNT++;
    }
    
    static function displayCounter() {
        
        echo self::COUNTER_PREFIX.self::$COUNT;
    }
}

Auteur::displayCounter();

echo Auteur::HTML_NEW_LINE;

$auteur1 = new Auteur("Victor", "Hugo");

$auteur2 = new Auteur("Jacques", "Prévert");

$auteur3 = new Auteur("Paul", "Verlaine");

$auteur4 = new Auteur("Arthur", "Rimbaud");

$auteur5 = new Auteur("Jean", "De La Fontaine");

Auteur::displayCounter();

echo Auteur::HTML_NEW_LINE;