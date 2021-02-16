<?php
//if else if example
$input = (int) readline('Enter an 1st number: ');
$input1 = (int) readline('Enter an 2nd number: ');
$input2 = (int) readline('Enter an 3rd number: ');
$sum = $input + $input1 + $input2;
if ($sum / 3 < 10) {
    echo "Average is very low" . PHP_EOL;
} else if ($sum / 3 <= 40) {
    echo "Medium Average" . PHP_EOL;
} else if ($sum / 3 <= 60) {
    echo "Good Average" . PHP_EOL;
} else {
    echo "Best Average" . PHP_EOL;
}
