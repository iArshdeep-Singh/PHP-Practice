<?php
// Loops through a block of code once, and then repeats the loop as long as the specified condition si true.
// The "do_while" loop will always execute the block of code at least once, it will then check the condition and repeat the loop while the specified condition is true.
$x = 2;

do {
    echo "$x\n";
    $x++;
} while ($x < 1)

?>