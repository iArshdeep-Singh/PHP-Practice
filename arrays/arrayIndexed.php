<?php
// Array with a numeric index.
$colors = array("red", "green", "blue");

print_r($colors);

echo "$colors[1]\n";

// change value
$colors[0] = "blue";
echo "$colors[0]\n\n";

// loop through an indexed array
foreach ($colors as $color) {
    echo "$color\n";
}
?>