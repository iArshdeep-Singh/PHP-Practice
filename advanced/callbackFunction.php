<?php
// A callback function (often refferred to as just "callback") is a function which is passed
// as an argument into another function.
function exclaim($str)
{
    return $str . "! ";
}

function ask($str)
{
    return $str . "? ";
}

function printFormatted($str, $format)
{
    // calling the '$format' callback function
    echo $format($str);
}

printFormatted("Hello, universe", "exclaim");
printFormatted("Hello, world", "ask");
?>