<?php
// Class constants can be useful to define some constant data within a class.
// A class constant is declared inside a class with the 'const' keyword.
// A constant cannot be changed once it is declared.
// Class constants are case-sensetive. However, it is recommended to name the constants in all uppercase letters.
# A constants can be accessed from outside the class by using the class name followed by
# the scope resolution operator (::) followed by the constant name, like here:
class Goodbye
{
    const LEAVING_MESSAGE = "Goodbye!\n";

    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();

$goodbye->byebye();
echo Goodbye::LEAVING_MESSAGE;
?>