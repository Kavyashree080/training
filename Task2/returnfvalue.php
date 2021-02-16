<?php
//Simple function to add two numbers
function addition($no1, $no2)
{
    return $no1 + $no2;
}
$input = (int) readline('Enter an 1st number: ');
$input1 = (int) readline('Enter an 2nd number: ');
$sum = addition($input, $input1);
echo "Sum of two number is " . $sum;
