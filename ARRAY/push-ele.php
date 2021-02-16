<?php
//Add the one element to the end of an array.
$fruit = array("apple", "grape", "banana", "orange");
echo ("Original Array") . PHP_EOL;
print_r($fruit);
echo ("Array after Push of element") . PHP_EOL;
array_push($fruit,"Mango");
print_r($fruit);
?>