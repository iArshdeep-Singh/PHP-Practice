<?php
// The 'final' keyword is used to pervent class inheritance or to pervent method overriding.
# Prevent class inheritance
final class Universe
{
    public function greet()
    {
        echo "Hello, universe!";
    }
}

class Milkyway extends Universe
{
    public function greet()
    {
        echo "Hello, world!";
    }
}

# Prevent method overriding 
class Animal
{
    final public function name()
    {
        echo "Tiger";
    }
}

class Wild extends Animal
{
    public function name()
    {
        echo "Puma";
    }
}

$milkyway = new Milkyway();
$milkyway->greet();

$wild = new Wild();
$wild->name();
?>