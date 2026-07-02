<?php
// "switch" statement selects one of many blocks of code to be executed.
$color = "blue";

switch ($color) {
    case "red":
        echo "Color is red.";
        break;
    case "green":
        echo "Color is green.";
        break;
    case "blue":
        echo "Color is $color.";
        break;
    default:
        echo "None of them.";
}

?>