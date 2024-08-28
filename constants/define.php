<?php
// Constants are like variables, except that once they are defined they cannot be changed or undefind.
// A constant is an identifier(name) for a simple value. The value cannot be changed during the script.
// A valid constant name starts with a letter or underscore (no "$" sign before the constant name).
// #NOTE: Unlike variables, constants are automatically global across the entire script.

// "define()" function is used to create a constant.

define("GREETING", "Welcome to Mars!");
define("greeting", "Welcome to Saturn!");

echo GREETING . "\t" . greeting;

?>