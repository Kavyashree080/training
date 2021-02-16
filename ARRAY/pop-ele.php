<?php
//Remove the last element of an array.
$fruit = array("apple", "grape", "banana", "orange");
echo ("Original Array") . PHP_EOL;
print_r($fruit);
echo ("Array after Pop of element") . PHP_EOL;
array_pop($fruit);
print_r($fruit);
?>