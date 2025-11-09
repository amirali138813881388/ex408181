<?php
abstract class shape{
    const UNIT="cm";
    abstract public function area();
}


class Rectangle extends Shape{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}


class Circle extends shape{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius,2);
    }
}

$rectangle = new Rectangle(3,2);
$circle  = new Circle(3);

echo "Rectangle area: " . $rectangle->area() . " " . Shape::UNIT . "²";
echo "<br>";
echo "Circle area: " . $circle->area() . " " . Shape::UNIT . "²";
