<?php
// Constants can be also created by using the "const" keyword.
// "const" are always case-sensitive
// "define()" has case-insensitve option
// "const" cannot be creatd inside another block scope, like inside a function or inside "if" statement
// "define()" can be created inside another block scope.

const CAR = "Audi\n";
echo CAR;

function test()
{
    // It will generate an error
    // const PLANET = "Earth."
    echo CAR;
}

test();
?>