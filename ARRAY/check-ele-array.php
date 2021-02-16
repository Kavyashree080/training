<?php
//Check if a specified element exists in the array.
$color1 = array("red", "green", "blue", "yellow");
echo ("Original Array") . PHP_EOL;
print_r($color1);
echo ("Search for red in array") . PHP_EOL;
if (in_array("red", $color1)) {
    echo "Match found". PHP_EOL;
} else {
    echo "Match not found". PHP_EOL;
}
?>