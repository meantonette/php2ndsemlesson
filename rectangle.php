<?php # Script 4.3 - Rectangle.php
// • Begin defining the class:
class Rectangle
{
    use tDebug; //new added to use the traits

    // • Declare the attributes:
    // • This class has two attributes: one for the rectangle’s width and another for its
    // height. Both are initialized to 0.
    public $width = 0; //public so it can be called in other files.
    var $height = 0; //can also var

    // • add and use a constructor
    function __construct($w = 0, $h = 0)
    {
        $this->width = $w; //calling the function like in javascript this.width
        $this->height = $h;
    }

    // • Create a method for setting the rectangle’s dimensions:
    function setSize($w = 0, $h = 0)
    {
        $this->width = $w;
        $this->height = $h;
    }

    // • Create a method that calculates and returns the
    // rectangle’s area:
    function getArea()
    {
        return ($this->width * $this->height);
    }
    // • Create a method that calculates and returns the
    // rectangle’s perimeter:
    function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    // Create a method that indicates if the rectangle is also a square:
    function isSquare()
    {
        if ($this->width == $this->height) {
            return true;
        } else {
            return false;
        }
    }
}
