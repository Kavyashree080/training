<?php
//Remove whitespace on only right sides of a  string
echo "Trim Whitespace on both side" . PHP_EOL;
$input = " hi Kavya  ";
echo "String before space removal" . $input . PHP_EOL;
echo "String After right space removal" . PHP_EOL;
echo rtrim($input) . PHP_EOL;
?>