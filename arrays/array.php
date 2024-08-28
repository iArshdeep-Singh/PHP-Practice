<?php
// An array stores multiple values in one single variable.
// An array is a special variable that can hold many values under a single name,
// and values can be accessed by referring to an index number or name.
// Array items adn be of any data type. The most common are strings and numbers.
// But array items can also be objects, functions or even arrays.
function five()
{
    echo "five";
}

$arr = array(
    "one",
    2,
    [3, "four"],
    function ($i, $j) {
        echo "$i and $j\n";
        return $i - $j;
    }
);

echo "$arr[0]\n";
echo "$arr[1]\n";
echo $arr[3](3, 7) . "\n";
print_r($arr[2]);
?>