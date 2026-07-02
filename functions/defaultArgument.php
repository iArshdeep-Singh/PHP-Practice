<?php
// Default argument in functions are used to provide default values for parameters,
// allowing the function to be called without explicitly passing arguments fro those parameters.
// This can make function more flexible and easier to use.
function greet($name = "world")
{
    echo "Hello, $name!\n";
}

greet("univers");
greet("mars");
greet();
?>