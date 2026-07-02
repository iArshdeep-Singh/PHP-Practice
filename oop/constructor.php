<?php
// A constructor allows us to initialize an object's properties upon creation of the object.
// If a '__constructor()' function is creatd, PHP will automatically call this function
// when an object is created from a class.
class Fruit
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
        echo "Hey! I'm constructor.\n";
    }

    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo "{$apple->get_name()}";
?>