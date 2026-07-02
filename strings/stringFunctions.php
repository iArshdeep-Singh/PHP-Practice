<?php

$x = "Hello, Universe!";
$y = " Hello, Mars!  ";

echo "$x\n$y\n\n";

// "strlen()" returns the length of a string.
echo strlen($x) . "\n";

// "str_word_count()" counts the number of words in a string
echo str_word_count($x) . "\n";

// "strpos()" searches for a specific text within a string. If match is found, the function returns
// the character position of the first match. If no match is found, it will return FALSE.
echo strpos($x, "Universe!") . "\n";

// "strtoupper()" returns the string in upper case.
echo strtoupper($x) . "\n";

// "strtolower()" returns the string in lower case.
echo strtolower($x) . "\n";

// "str_replace()" replaces some characters with the same ohter characters in a string.
// Replace the text "Universe!" with "World!"
echo str_replace("Universe", "World!", $x) . "\n";

// "strrev()" reverses a string
echo strrev($x) . "\n";

// "trim()" removes any whitespace from the beginning or the end
echo trim($y) . "\n";

// "explode()" splits a string into an array.
// The first parameter of the "explode()" function represents the "separator". The "separator" specifies where to split the string.
// #Note: The separator is required.
$s = explode(" ", $x); // space character is used.
print_r($s);

// "substr()" returns a range of characters by specifying the start index and the number of characters.
echo "\n" . substr($x, 6, 5) . "\n";
echo substr($x, 6) . "\n";
echo substr($x, -5, 3);

?>