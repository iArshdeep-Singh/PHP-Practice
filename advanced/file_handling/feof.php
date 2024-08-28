<?php
// The 'feof()' function checks if the 'end-of-file' (EOF) has been reached.
// This function is useful for looping through data of unknown length.

$file = fopen('text.txt', 'r');

while (!feof($file)) {
    echo fgets($file) . "\n";
}

fclose($file);
?>