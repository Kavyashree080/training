<?php
//Search a value in an array and get the key if the value exists.
$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Result for search color red with index ") . PHP_EOL;
echo array_search("red", $color1). PHP_EOL;
?>