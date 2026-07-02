<?php
// The 'fgets()' function is used to read a single line form a file.
$file = fopen('text.txt', 'r');

echo fgets($file);

fclose($file);
?>