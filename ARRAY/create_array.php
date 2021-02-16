<?php
//Create a simple numeric array, associative array, multidimensional array.
echo "Numeric array";
print("\n");
//numeric array
$noarray = array(1, 2, 3, 4, 5);
print_r($noarray);
print("\n");
//Associative array
echo "Associative array";
print("\n");
$fruits = array("1" => "mango", "2" => "apple", "3" => "grapes");
print_r($fruits);
print("\n");
// multidimensional array
echo "Multidimensional array";
print("\n");
$personal = array
    (
    array("Kavya", "Karkala", 24),
    array("Swathi", "Hasan", 24),
    array("Lovely", "ooty", 24),
);

print_r($personal);
