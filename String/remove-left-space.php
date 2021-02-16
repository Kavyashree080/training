<?php
//Remove whitespace on only left sides of a  string
echo "Trim Whitespace on both side" . PHP_EOL;
$input = " hi Kavya  ";
echo "String before space removal" . $input . PHP_EOL;
echo "String After left space removal" . PHP_EOL;
echo ltrim($input) . PHP_EOL;
?>