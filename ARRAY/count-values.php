<?php
//Count the occurrences of the values in an array
$alphabets = array("A", "B", "C", "C", "A");
echo ("Array values");
print("\n");
print_r($alphabets);
echo ("Count of Array values");
print("\n");
print_r(array_count_values($alphabets));
?>