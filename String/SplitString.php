<?php
//split the string into word of 3 characters
echo " split the string into word of 3 characters" . PHP_EOL;
$input = "Hello Kavyashree";
echo "Original String " . $input. PHP_EOL;
echo "String After Split " . PHP_EOL;
echo chunk_split($str, 3) . PHP_EOL;