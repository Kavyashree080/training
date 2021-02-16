<?php
//Sort an indexed array in ascending order.
$color1 = array("red", "green", "blue", "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Array after ascending sort") . PHP_EOL;
sort($color1);
print_r($color1);
?>