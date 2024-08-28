<?php
// Static properties can be called directly without creating an instance of a class.
// Static properties are declared with the 'static' keyword.
class Pi
{
    public static $value = 3.14159;

    public function staticValue()
    {
        echo "The value of Pie is " . self::$value . "\n";
    }
}

class Pie extends Pi
{
    public function xStatic()
    {
        return parent::$value;
    }
}

$pi = new Pi();
$pie = new Pie();
echo Pi::$value . "\n";
$pi->staticValue();
echo $pie->xStatic();
?>