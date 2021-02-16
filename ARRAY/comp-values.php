<?php
//Compare the array with values only.
$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
$color2 = array("e" => "red", "f" => "green", "g" => "blue");
echo ("Array1").PHP_EOL;
print_r($color1);
echo ("Array2").PHP_EOL;
print_r($color2);
$result = array_diff($color1, $color2);
echo ("Result After Comparision").PHP_EOL;
print_r($result);
?>