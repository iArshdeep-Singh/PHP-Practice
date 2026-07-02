<?php
// The 'instanceof()' of function is used to check if an object belongs to a specific class.
class Animal
{
    public $name;

    function setName($name)
    {
        $this->name = $name;
    }
}

$animal = new Animal();

var_dump($animal instanceof Animal);
var_dump($animal instanceof Fruit);
?>