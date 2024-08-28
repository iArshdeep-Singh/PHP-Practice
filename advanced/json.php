<?php
// JSON stands for JavaScrip Object Notation, and is a syntax for storing and exchanging data.
// Since the JSON format is a text-based format, it can easily be sent to and from a server,
// and used as a data format by any programming language.
// PHP has some built-in functions to handle JSON:

// The 'json_encode()' used to encode a value to JSON format.
$car = ["Audi", "BMW", "Camero"];
$age = ["Ben" => 34, "Peter" => 24, "Joe" => 40];

echo json_encode($car) . "\n";
echo json_encode($age) . "\n";

// The 'json_decode()' used to decode a JSON object into a PHP object or an associative array.
$json_obj = '{"Peter":35, "Ben":87, "Joe":43}';
var_dump(json_decode($json_obj));
echo $json_obj . "\n";


$jsonObject = json_decode($json_obj);
echo $jsonObject->Peter . "\n";
echo $jsonObject->Ben . "\n";
echo $jsonObject->Joe . "\n";
?>