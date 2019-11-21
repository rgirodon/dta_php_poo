<?php
class Student  {
    
    private $firstName;
    
    private $lastName;
    
    function __construct($firstName, $lastName) {
    
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;
    }
    
    public function sayHello() {
        
        echo $this->getFullName();
    }
    
    private function getFullName() {
        
        return $this->firstName." ".$this->lastName;
    }
    
    public function getFirstName() {
        
        return $this->firstName;
    }
    
    public function getLastName() {
        
        return $this->lastName;
    }
    
    public function setLastName($lastName) {
        
        $this->lastName = $lastName;
    }
}

$student1 = new Student("Alexandra", "Dupont");

$student1->sayHello();

echo "<br>---------<br>";

$student1->setLastName("Durand");

$student1->sayHello();