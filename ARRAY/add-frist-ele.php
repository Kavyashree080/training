<?php
//Add one or more elements to the beginning of an array.
$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
array_unshift($color1, "merun");
echo ("Array after Adding element") . PHP_EOL;
print_r($color1);
?>
