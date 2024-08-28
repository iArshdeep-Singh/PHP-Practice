<?php
// Abstract classes and methods are used when the parent class has a named method, but 
// need its child class(es) to fill out the tasks.
// An abstract class is a class that contains at least one abstract method.
// An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the 'abstract' keyword.
abstract class MobilePhone
{
    public $call;
    public function calling()
    {
        echo "{$this->call}\n";
    }
    abstract public function messaging($message);
    abstract protected function internet();
    abstract public function videoCall($video): string;

}

abstract class SecondGeneration extends MobilePhone
{
    public function messaging($message)
    {
        echo "$message";
    }
}

class ThirdGeneration extends SecondGeneration
{
    public function internet()
    {
        echo "INTERNET IS AVAILABLE!\n";
    }

    public function videoCall($video): string
    {
        return "$video";
    }
}

$mobile = new ThirdGeneration();
$mobile->call = "Callin'...";
$mobile->calling();
$mobile->messaging("Messagin'...\n");
$mobile->internet();
echo $mobile->videoCall("Video callin'...\n");
?>