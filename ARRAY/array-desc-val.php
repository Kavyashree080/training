<?php
//Sort an associative array in descending order based on the value.
$color1 = array("red", "green", "blue", "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Array after ascending sort") . PHP_EOL;
arsort($color1);
print_r($color1);
?>