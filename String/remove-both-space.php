<?php
//Remove whitespace on both sides of a  string
echo "Trim Whitespace on both side" . PHP_EOL;
$input = " hi Kavya  ";
echo "String before space removal" . $input . PHP_EOL;
echo "String After space removal" . PHP_EOL;
echo trim($input) . PHP_EOL;
?>