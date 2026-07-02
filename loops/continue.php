<?php
// The "continue" statement can be used to jump out of the current iteration of a loop, and continue with the next.
$x = 0;

while ($x < 9) {

    $x++;
    
    if ($x == 5) {
        echo "-continue/skipped at $x\n";
        continue;
    }

    echo "$x\n";

}
?>