<?php
// The 'fgetc()' function is used to read a single character from a file.
$file = fopen('text.txt', 'r');

while (!feof($file)) {
    echo fgetc($file);
}

fclose($file);
?>