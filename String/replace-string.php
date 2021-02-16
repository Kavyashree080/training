<?php
//Replace a character of a string with another character.
echo "Get a part of the string" . PHP_EOL;
$input1 = "Kavya is Sister of Madhu";
$input2 = "Kiran";
echo "String 1" . $input1 . PHP_EOL;
echo "Replacing String" . $input2 . PHP_EOL;
echo "String After Replace" . PHP_EOL;
echo substr_replace($input1,$input2, 19) . PHP_EOL;