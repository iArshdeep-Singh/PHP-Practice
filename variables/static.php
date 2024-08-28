<?php
// Normally, when a function is executed/completed, all of its variables are deleted. However, sometimes
// we want a local variable NOT to be deleted. 
// To do this, the "static" keyword is used.

function staticTest()
{
    static $x = 3;
    $y = 3;

    echo "x: $x\n";
    echo "y: $y\n\n";

    $x++;
    $y++;
}

staticTest();
staticTest();
staticTest();

?>