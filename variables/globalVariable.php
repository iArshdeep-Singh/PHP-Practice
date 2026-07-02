<?php
// A variable declared outside a function has Global Scope and can only be accessed outside a function

$x = "-global";

function globalVariable()
{
    // It will generate an error
    // echo "$x";
}

globalVariable();

echo "$x";

?>