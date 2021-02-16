<?php
//Default parameter setting i function
function addition($no1 = 10, $no2 = 90)
{
    $sum = $no1 + $no2;
    echo "Sum of Two Number is " . $sum . PHP_EOL;
}
addition();
addition(60);
addition(140, 130);
