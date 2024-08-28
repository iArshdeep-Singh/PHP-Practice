<?php
// The 'fwrite()' function is used to create a file.
// The first parameter of 'fwrite()' contains the name of the file to write and
// the second parameter is the string to be writter.

// 'w' - all the existing data will be erased while using 'w'. Creates a new file if the file 
// doesn't exist. 
$file = fopen('text.txt', 'w');

$txt = "ArshdeepSingh";

fwrite($file, $txt);

fclose($file);

// 'a' - the existing data in the file will be preserved. File pointer starts at the end of 
// the file. Creates a new file if the file doesn't exist.
$file = fopen('text.txt', 'a');

fwrite($file, $txt);

fclose($file);

// 'x' - creates a new file for write only. Returns FASLSE and error if file already exists.
$file = fopen('text.txt', 'x');

fwrite($file, $txt);

fclose($file);
?>