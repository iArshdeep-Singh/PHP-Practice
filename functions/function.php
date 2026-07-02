<?php
// A function is a block of statements that can be used repeatedly in a program. 
// A function will not execute automatically when a page loads.
// A function execute by a call to the function.
function sum($x, $y)
{
    echo "Sum of $x and $y: " . $x + $y . "\n";

    return $x + $y;
}

$z = sum(3, 5);

echo "z: $z\n";

sum(5, 7);
sum(7, 11);
sum(11, 13);

?>