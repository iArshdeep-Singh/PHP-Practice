<?php declare(strict_types=1);
// To declare a type for the function return, add a colon(:) and the type right before the
// opening curly('{') bracket when declaring this function.
function add(int $x, int $y): float
{
    return $x + $y;
}

// echo (add(1.25, 1.75) . "\n"); // It will generate an error
echo (add(1, 2));
?>