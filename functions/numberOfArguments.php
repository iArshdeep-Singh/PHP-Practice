<?php
// By using '...' operator in front of the function parameter, the function accepts an
// unknown number of arguments. This is also called a variadic function.
// The variadic function argument becomes an array.
// NOTE: Only one argument can be used with the variable length, and it has to be the last 
// argument. The variadic argument must be the last argument.
function sum($y, ...$x)
{
    $len = count($x);

    for ($i = 0; $i < $len; $i++) {
        $y += $x[$i];
    }

    return $y;
}

$a = sum(1, 1, 3, 5, 7, 9);
echo "$a";
?>