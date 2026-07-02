<?php
// Inherited methods can be overridden  by redefining the methods (use the same name) in the child class.
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.\n";
    }
}

class Strawberry extends Fruit
{
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight}g.";
    }
}

$fruit = new Fruit("Fruit", "Color");
$strawberry = new Strawberry("Strawberry", "Red", 300);

$fruit->intro();
$strawberry->intro();
?>