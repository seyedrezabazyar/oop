<?php
class Person {
    public $name;
    public $age;
    
    public function introduceYourself()
    {
        echo "I'm " . $this->name . " and I'm " . $this->age . " years old.";
    }
}

// create object
$personObject = new Person();

// set properties
$personObject->name = "Seyed Reza Bazyar";
$personObject->age = 25;

$personObject->introduceYourself();