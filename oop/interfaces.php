<?php
// Interfaces allow to specify what methods a class should implemented.
// Interfaces make it easy to use a variety of different classes in the same way.
// When one or more classes use the same interface, it is reffered to as 'Pollymorphism'.
// Interfaces are declared with the 'interface' keyword.
// Interfaces cannot have properties.
// All methods in an interface are abstract, so they cannot be implemented in code and the 'abstract' keyword is not neccessary.
// To implement an interfaces, a class must use the 'implements' keyword.
interface Animalx
{
    public function makeSound();
}

interface Birds
{
    public function makeSoundb();
}

class Pig implements Animalx
{
    public function makeSound()
    {
        echo "wee-wee\n";
    }
}

class Dog implements Animalx
{
    public function makeSound()
    {
        echo "bow-bow\n";
    }
}

class SoundOfBirdsAndAnimals implements Animalx, Birds
{
    public function makeSound()
    {
        echo "animal's sounds.\n";
    }

    public function makeSoundb()
    {
        echo "bird's sounds.\n";
    }
}

$dog = new Dog();
$pig = new Pig();
$birdsAndAnimals = new SoundOfBirdsAndAnimals();

$dog->makeSound();
$pig->makeSound();
$birdsAndAnimals->makeSound();
$birdsAndAnimals->makeSoundb();
?>