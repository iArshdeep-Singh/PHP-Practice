<?php
// The 'fclose()' function is used to close an open file.
$file = fopen('text.txt', 'r');

echo fread($file, filesize('text.txt'));

fclose($file);
?>