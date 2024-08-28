<?php
// The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
$vowels = ['i', 'u', 'a', 'e', 'o'];
$odds = [3, 1, 9, 7, 5];
$car = ['brand' => 'Ferrari', 'model' => 'Porche', 'year' => 1969, 'color' => 'Red'];

echo "\nBefore - \n";
print_r($vowels);
print_r($odds);
print_r($car);

// The 'sort()' function - sort arrays in ascending order.
sort($vowels);
sort($odds);

echo "\nAfter sort() - \n";
print_r($vowels);
print_r($odds);

// The 'rsort()' function - sort arrays in descending order.
rsort($vowels);
rsort($odds);

echo "\nAfter rsort() - \n";
print_r($vowels);
print_r($odds);


// The 'asort()' fucntion - sort associative arrays in ascending order, according to the value.
asort($car);

echo "\nAfter asort() - \n";
print_r($car);

// The 'ksrot()' function - sort associative arrays in ascending order, according ot the key.
ksort($car);

echo "\nAfter ksort() - \n";
print_r($car);

// The 'arsort()' function - sort associative arrays in descending order, according to the value.
arsort($car);

echo "\nAfter arsort() - \n";
print_r($car);

// The 'krsort()' function - sort associative arrays in descending order, according to the key.
krsort($car);

echo "\nAfter krsort() - \n";
print_r($car);
?>