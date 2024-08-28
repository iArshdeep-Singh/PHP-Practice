<?php
// Traits are used to declare methods that can be used in multiple classes. Traits can have
// methods and abstract methods that can be used in multiple classes, and the methods can have 
// any access modifier (public, protected, or private).
// Traits are declared with the 'trait' keyword.
trait messageX
{
    public function msgX()
    {
        echo "OOP is fun!\n";
    }

    abstract protected function msgO();
}

trait messageY
{
    public function msgY()
    {
        echo "OOP reduces code duplication.\n";
    }
}

class WelcomeX
{
    use messageX;
    public function msgO()
    {
        echo "Hello, from X\n";
    }
}

class WelcomeY
{
    use messageX, messageY;
    public function msgO()
    {
        echo "Hello, from Y\n";
    }
}

$welX = new WelcomeX();
$welXY = new WelcomeY();

$welX->msgX();
$welX->msgO();

$welXY->msgX();
$welXY->msgY();
$welXY->msgO();
?>