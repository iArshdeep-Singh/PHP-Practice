<?php
// "echo" and "print" are more or less the same. Both used to output data to the screen
// "echo" has no return value while "print" has return value of "1" so it can be used in expression
// "echo" can take multiple parameters (although such usage is rare) while "print" can take one argument.
// "echo" is marginally faster than "print"

$x = "PHP";
$y = 5;
$z = 7;

// "echo"
echo "$x is Fun!\n";
echo "Study " . $x . "\n";
echo "This ", "string ", "was ", "made ", "multiple ", "parameters.\n\n";


// "print"
$a = print "I'm about to learn PHP!\n";
print "Five: " . $y . " and Seven: " . $z . "\n";
print "$a\n";
print $y + $z;

// It will generate an error
// print "This ", "string ", "was ", "made ", "multiple ", "parameters.\n\n";
?>