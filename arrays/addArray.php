<?php
// To add items to an existing array, '[]' brackets can be used.
$fruits = ["apple", "banana", "coconut"];
$car = ["brand" => "Ferrari", "model" => "Porche", "year" => 1969];

// add item (indexed array)
$fruits[] = "cherry";

// add item (associative array)
$car["color"] = "Red";

print_r($fruits);
print_r($car);

// add multiple items to an existing indexed array by using 'array_push()' function
array_push($fruits, "kiwi", "orange");
print_r($fruits);

// add multiple items to an existing associative array
$car += ["price" => 10050, "insurance" => true];
print_r($car);
?>