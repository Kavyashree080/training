<?php
//Get only the array value from the multidimensional array for the specific array.
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
//printing on specific index
echo "Array in index 0";
print("\n");
print_r($personal[0]);
