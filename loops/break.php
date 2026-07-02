<?php
// The "break" statement is used to jump out of different kind of loop.
$x = 0;

for ($x; $x < 7; $x++) {

    if ($x == 5) {
        echo "-break at 5";
        break;
    }
    
    echo "$x\n";
}
?>