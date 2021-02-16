<?php
//Remove the first element of an array.
$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Array after removing first element") . PHP_EOL;
array_shift($color1);
print_r($color1);
?>