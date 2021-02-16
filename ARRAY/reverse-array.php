<?php
//Reverse order of an array.

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Array After Reverse") . PHP_EOL;
print_r(array_reverse($color1));
?>