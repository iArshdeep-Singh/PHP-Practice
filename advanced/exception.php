<?php
// An exception is an object that describes an error or unexpected behaviour of a PHP script.
// Exceptions are thrown by many PHP functions and classes.
// User-defined functions and classes can also throw exceptions
function divide($dividend, $devisor)
{
    if ($devisor == 0) {
        throw new Exception("Division by zero\n");
    }

    return $dividend / $devisor;
}

try {
    echo divide(5, 0) . "\n";
} catch (Exception $e) {
    echo "Unable to divide - $e.\n";
} finally {
    echo "\nFinally";
}
?>