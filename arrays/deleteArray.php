<?php
// With 'array_splice()' function, the index is specified(where to start) and how many items to be deleted.
// After deletion the array gets reindexed automatically, starting at index.
$cars = ['Audi', 'BMW', 'Camero', 'Ferrari', 'Tesla', 'TATA', 'Lemborgini', 'Porche', 'Mercedes', 'Ford'];
$car = ['brand' => 'Ferrari', 'model' => 'Porche', 'year' => 1963, 'color' => 'Red'];

// remove single item
array_splice($cars, 1, 1); // second item [index 1]
print_r($cars);

// remove multiple items
array_splice($cars, 1, 2);
print_r($cars);

// The 'unset()' function is doesn't reindexed/rearrange the indices, meaning that after deletion
// the array will no longer contain the missing indices.
unset($cars[2]);
print_r($cars);

// remove multiple items
unset($cars[0], $cars[1]);
print_r($cars);

// Remove items from an associative array with unset function
unset($car['color']);
print_r($car);

// With the 'array_diff()' function - the function returns a new array, without the specified items.
// #NOTE: The 'array_diff()' function takes values as parameters, and not keys.
$new_array = array_diff($car, ['Porche', 1963]);
print_r($new_array);

// remove the last item
array_pop($cars);
print_r($cars);

// remove the first item
array_shift($cars);
print_r($cars);
?>