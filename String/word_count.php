<?php
//Get the word count of the String
echo "Word count in a string" . PHP_EOL;
$input = " hi Kavya hello ";
echo "String " . $input . PHP_EOL;
echo "Number of words" . PHP_EOL;
echo str_word_count($input) . PHP_EOL;
?>