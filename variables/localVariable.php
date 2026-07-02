<?php
// A variable declared within a function has local scope and can only be accessed within that function

$x = "-global";

function localScope()
{
    $x = "-local";
    echo "$x\n";
}

localScope();

echo "$x";
?>