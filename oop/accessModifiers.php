<?php
// Properties and methods can have access modifiers which controls where they can be accessed.
// 'public' - the property or method can be accessed from everywhere. This is default.
// 'protected' - the property or method can be accessed within the class and by classes
// derived from that class.
// 'private' - the property or method can only be accessed within the class.
class Fruit
{
    public $name;
    protected $color;
    private $weight;

    function __construct()
    {

    }

    public function set_name($n)
    {
        $this->color = $n;
    }

    protected function set_color($c)
    {
        $this->color = $c;
    }

    private function set_weight($w)
    {
        $this->weight = $w;
    }
}

$kiwi = new Fruit();
$kiwi->name = "Kiwi";
// $kiwi->color = "Green";
// $kiwi->weight = 300;

$kiwi->set_name("Kiwi");
// $kiwi->set_color("Green");
// $kiwi->set_weight(300); 

echo "{$kiwi->name}\n";
// echo "{$kiwi->color}\n";
// echo "{$kiwi->weight}\n";
?>