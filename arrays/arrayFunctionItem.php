<?php
// Array items can be of any data type, including function.
function myFun()
{
    echo "I come from a function!";
}

$arr = array(
    "one",
    15,
    function ($x, $y) {
        return $x + $y;
    }
);

echo $arr[2](1, 3);
?>