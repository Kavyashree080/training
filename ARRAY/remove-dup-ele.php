<?php
//Remove duplicates values from an array.
$color1 = array("c1" => "red", "c2" => "green", "c3" => "red", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Array after Removing duplicate element") . PHP_EOL;
print_r(array_unique($color1));
?>
