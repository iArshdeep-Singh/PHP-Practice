<?php
// A destructor called when the object is destructed or the script is stopped or exited.
// If a '__destructor()' function is created, PHP will autormatically call this function
// at the end of the script.
class Fruit
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
        echo "__construct(): I'm automatically called when an object is created from a class.\n";
    }

    function __destruct()
    {
        echo "__destruct(): I'm automatically called as well, but at the end of the script.\n";
        echo "The fruit is {$this->name}";
    }
}

$apple = new Fruit("Apple");
echo "\n{$apple->name} is a fruit.\n";
echo "Hello, universe!\n\n";
?>