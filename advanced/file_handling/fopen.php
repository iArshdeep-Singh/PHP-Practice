<?php
// A better method for open files is with the 'fopen()' function. This function gives more
// options than the 'readfile.php' function.
$file = fopen("text.txt", 'r');

echo fread($file, filesize('text.txt'));

fclose($file);
?>