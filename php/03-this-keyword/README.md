## this Keyword

**Inside the class body `this` refers to the current class object. It can be used to access/modify members and call functions inside the class.**

`$this` is a pseudo-variable (also a reserved keyword) which is only available inside methods. And, it refers to the object of the current method.

It can be understood via the following code:
```php
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
```

Output:
```
Length = 3
Width = 4
Area = 12
```

Explanation:

- At Line 2 defines `Rectangle` classes. At `lines 5 and 6` Its members are `length` and `width`. 
- At `lines 11 and 17` values are set to the members `length` and `width`.
- At `lines 23, 28 and 29` members are accessed.
- At `line 32` a class function is called.
- At `line 37` an object is created.
- At ‍`lines 39 and 40` in which length and width are set, `this` points to the object created at `line 37`.
- At `lines 41` the function `printData` is called and a message is printed.