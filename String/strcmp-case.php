<?php
//Compare the 2 strings with case sensitive
echo "Compare the 2 strings with case sensitive" . PHP_EOL;
$input1 = " hi Kavya";
$input2 = " hi Kavya";
echo "String 1" . $input1 . PHP_EOL;
echo "String 2" . $input2 . PHP_EOL;
echo "Result of comparision" . PHP_EOL;
echo strncmp($input1, $input2, 6) . PHP_EOL;
?>