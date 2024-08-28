<?php
// Classes and objects are two main aspects of object-oriented programming.
// A class is a template for objects and an object is an instance of a class.
class Animal
{
    // properties
    public $name;
    public $color;
    public $breed;
    public $sound;

    function __construct()
    {

    }
    
    // methods
    public function sound($sound)
    {
        $this->sound = $sound;
    }

    public function setter($name, $color, $breed)
    {
        $this->name = $name;
        $this->color = $color;
        $this->breed = $breed;
    }

    public function getter()
    {
        return [$this->name, $this->color, $this->breed, $this->sound];
    }
}

// objects
$animal = new Animal();
$animal->sound('Bark');
$animal->setter('Spike', 'Brown', 'German Shepered');

echo "name:\t" . $animal->getter()[0] . "\n";
echo "color:\t" . $animal->getter()[1] . "\n";
echo "breed:\t" . $animal->getter()[2] . "\n";
echo "sound:\t" . $animal->getter()[3] . "\n";
?>