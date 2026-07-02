<?php
// A multidimensional array is an array containing one or more arrays. 
// PHP supports multidimensional array that are two, three, five or more levels deep.

// $cars = array(
//     array("Volvo", 12, 18),
//     array("Ford", 13, 17),
//     array("Audi", 15, 17)
// );

$cars = [['Volvo', 12, 18], ['Ford', 13, 17], ['Audi', 15, 17]];

echo $cars[0][0] . ":\tIn stock: " . $cars[0][1] . ":\tsold: " . $cars[0][2] . "\n";
echo $cars[1][0] . ":\tIn stock: " . $cars[1][1] . ":\tsold: " . $cars[1][2] . "\n";
echo $cars[2][0] . ":\tIn stock: " . $cars[2][1] . ":\tsold: " . $cars[2][2] . "\n";
?>