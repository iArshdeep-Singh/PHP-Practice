<?php
// The 'readfile()' function reads a file and writes it to the output buffer.
// The 'readfile()' function is useful to open a file and read its content.

echo readfile('text.txt' . "\n");
echo readfile('../dateAndTime.php') . "\n";
echo readfile('../../echoAndPrint.php');
?>