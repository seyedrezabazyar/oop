<?php
class Rectangle 
{
    // Declare the attributes
    private $length;
    private $width;
    
    // Method to set the Length
    public function setLength($lengthVal) 
    {
        $this->length = $lengthVal;
    }

    // Method to set the Width
    public function setWidth($widthVal) 
    {
        $this->width = $widthVal;
    }

    // Method to calculate and return the area
    public function calculationArea() 
    {
        return $this->length * $this->width;
    }

    public function printData() 
    {
        echo "Length = " . $this->length . "\n";
        echo "Width = " . $this->width . "\n";

        // Access calculationArea function
        $area = $this->calculationArea();
        echo "Area = " . $area;
    }
}

$rectangle = new Rectangle();

$rectangle->setLength(3);
$rectangle->setWidth(4);
$rectangle->printData();