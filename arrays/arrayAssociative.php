<?php
// Associative arrays are arrays that use named keys.
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1969);

echo $cars["model"] . "\n\n";

// change value
$cars["year"] = 1975;

// loop through
foreach ($cars as $key => $value) {
    echo "$key: $value\n";
}
?>