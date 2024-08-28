<?php declare(strict_types=1);
// In PHP, the data types of arguments in functions can be specified and enforce the expected
// types and ensure type safety.(int, float, string, bool, array, object, callable, iterable etc)
function add(int $x, array $rr)
{
    return $x + $rr[2];
}

print (add(13, [1, 3, 5, 7, 9]));
// print (add(13.0, [1, 3, 5, 7, 9])); // It will generate an error
?>