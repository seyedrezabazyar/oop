<?php
class Person
{
    public $name;
    public $age;

    // set default value for id
    private $id = "1";

    public function printData()
    {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Id: " . $this->id . "\n";
    }
}

// create object
$personObject = new Person();

// set properties
$personObject->name = "Seyed Reza Bazyar";
$personObject->age = 25;
// can't access privates from outside of the class
# $personObject->id = "new_id"; //Error

$personObject->printData();