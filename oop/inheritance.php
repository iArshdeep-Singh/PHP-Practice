<?php
// When a class derived from another class.
// The child class will inherit all the public and protected properties and methods from 
// the parent class. In addition, it can have its own properties and methods.
// An inherited class is defined by the 'extends' keyword.
class Animal
{
    public $name;
    private $color;
    protected $sound;


    public function __construct($name, $color, $sound)
    {
        $this->name = $name;
        $this->color = $color;
        $this->sound = $sound;
    }

    protected function sound()
    {
        echo "{$this->soundx($this->sound)}\n";
    }

    private function soundx($sound)
    {
        return $sound;
    }

    public function get_color()
    {
        return $this->color;
    }
}


class Domestic extends Animal
{
    public function dog()
    {
        echo $this->sound();
    }

    public function get_name()
    {
        return $this->name;
    }
}

$animal = new Animal("Lion", "Mustard Yellow", "Roar");
echo "name: {$animal->name}\tcolor: {$animal->get_color()}" . "\n\n";

$dog = new Domestic("Dog", "Black", "Bow-Bow");
$dog->dog();
echo $dog->get_name() . "\n";
echo $dog->get_color();
?>