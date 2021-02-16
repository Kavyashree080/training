<?php
//Fill an array with specific values for the specified keys.
$keys = array("a", "b", "c", "d");
echo ("Key Array") . PHP_EOL;
print_r($keys);
$result = array_fill_keys($keys,"alpha" );
echo ("Result") . PHP_EOL;
print_r($result);
?>
