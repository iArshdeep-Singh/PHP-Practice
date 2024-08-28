<?php
// Static methods can be called directly without an instance of the class first.
// Static methods are declared with the 'static' keyword.
// To access a static method use the class name, double colon (::), and the method name:
class GreetingX
{
    public static function welcomeX()
    {
        echo "Hello, universeX!\n";
    }

    protected static function welcomeY()
    {
        echo "Hello, universeY!\n";
    }

    # A class can have both static and non-static methods. A static method can be accessed
    # from a method in the same class using the 'self' keyword and double colon (::).
    public function __construct()
    {
        self::welcomeX();
    }
}

class GreetingY extends GreetingX
{
    # Static methods can also be called from methods in other classes. To do this, the static
    # method should be 'public'.
    public function welcomeAgain()
    {
        GreetingX::welcomeX();
    }

    # To call a static method from a child class, use the 'parent' keyword inside the child
    # class. Here, the static method can be 'public' or 'protected'.
    public function welcomeOnceAgain()
    {
        parent::welcomeX();
        parent::welcomeY();
    }
}

new GreetingX();
echo "----------\n";
$greetY = new GreetingY();
echo "----------\n";
$greetY->welcomeAgain();
echo "----------\n";
$greetY->welcomeOnceAgain();

?>