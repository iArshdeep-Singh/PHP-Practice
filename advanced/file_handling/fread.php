<?php
// The 'fread()' function reads from an opened file.
// The first parameter of 'fread()' contains the name of the file to read from
// and the second parameter specifies the maximum number of bytes to read.
$file = fopen('../../hello.php', 'r');

echo fread($file, filesize('../../hello.php'));

fclose($file);
?>