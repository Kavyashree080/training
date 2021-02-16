<?php
//Get the keys of an array.

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Result") . PHP_EOL;
print_r(array_keys($color1));
?>