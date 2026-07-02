<?php
// In PHP, arguments are usually passed by value, which means that a copy of the value is
// used in the function and the variable that was passed into the function cannot be changed.
// When a function arguments is passed by reference, changes to the argument, and also change
// the variable that was passed in. To turn a function argument into a reference, the '&' operator is used.
function add_five(&$x)
{
    return $x += 5;
}

$num = 3;

$z = add_five($num);
echo "z: $z\n\n";

echo "$num\n----\n";


$z = add_five($num);
echo "z: $z\n\n";

echo "$num\n----\n";
?>