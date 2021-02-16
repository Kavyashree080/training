<?php
//Example for pass by reference in function
function swap(&$first, &$second)
{
    $temp = $first;
    $first = $second;
    $second = $temp;

    echo "First number " . $first . " Second number " . $second . "\n";
}

$number1 = 5;
$nmber2 = 7;

swap($number1, $nmber2);

echo "First number " . $number1 . " Second number " . $nmber2;
