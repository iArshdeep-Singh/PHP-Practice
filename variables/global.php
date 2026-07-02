<?php
// The "global" keyword is used to access a global variable within a function.

$x = 3;
$y = 5;

$a = 3;
$b = 5;

// "global" keyword
function globalTest()
{
    global $x, $y;
    $y = $x + $y;
}

// "$GLOBALS" Keyword
function globalArray()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

globalTest();
globalTest();

globalArray();
globalArray();

echo "$y\n";
echo "$b";
?>