<?php
//Simple function to print greetings
function greetings()
{
    echo "Hi Good Morning";
}
function greetings1()
{
    echo "Hi Good Afternoon";
}

function greetings2()
{
    echo "Hi Good Evening";
}

// Calling the function
echo "1 Morning" . PHP_EOL;
echo "2 After Noon" . PHP_EOL;
echo "3 Evening" . PHP_EOL;
$input1 = (int) readline('Enter an 2nd number: ');
if ($input1 == 1) {
    greetings();
} else if ($input1 == 2) {
    greetings1();
} else if ($input1 == 3) {
    greetings2();
} else {
    echo "Invalid entry";
}
