<?php
//Merge one or more array.

$fruit1 = array("apple", "grape");
echo ("Frist Array") . PHP_EOL;
print_r($fruit1);
$fruit2 = array("mango", "orange");
echo ("Frist Array") . PHP_EOL;
print_r($fruit2);
echo ("Array after merge") . PHP_EOL;

print_r(array_merge($fruit1, $fruit2));
?>