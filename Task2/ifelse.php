<?php
//if else  example
$input = (int) readline('Enter an 1st number: ');
$input1 = (int) readline('Enter an 2nd number: ');
if ($input >= $input1) {
    echo "First Number is greater than 2nd Number" . PHP_EOL;
} else {
    echo "2nd Number is greater than 1st Number" . PHP_EOL;
}
