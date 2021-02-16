
<?php

echo "Numeric array" . PHP_EOL;

$noarray = array(1, 2, 3, 4, 5);
print_r($noarray);

echo "Associate Array " . PHP_EOL;

$fruits = array("1" => "mango", "2" => "apple", "3" => "grapes");
print_r($fruits);

$personal = array
    (
    array("Kavya", "Karkala", 24),
    array("Swathi", "Hasan", 24),
    array("Lovely", "ooty", 24),
);

echo "Multidimentional Array index 0 " . PHP_EOL;
print_r($personal[0]);

$a = array("A", "B", "C", "C", "A");

print_r($a);
echo "Counting array values of array " . PHP_EOL;
print_r(array_count_values($a));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
$color2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($color1, $color2);
print_r($result);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
$color2 = array("c1" => "red", "c2" => "green", "c3" => "blue");

$result = array_diff_key($color1, $color2);
print_r($result);

$arr = array("a", "b", "c", "d");
$r = array_fill_keys($arr, "alpha");
print_r($r);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(array_keys($color1));

$a1 = array("apple", "grape");
$a2 = array("mango", "orange");
print_r(array_merge($color1, $color2));

$a = array("apple", "grape", "banana");
array_pop($a);
print_r($a);

$a = array("apple", "grape", "banana");
array_push($a, "mango");
print_r($a);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(array_reverse($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo array_search("", $color1);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo array_shift($color1) . "<br>";
print_r($color1);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(array_slice($color1, 2));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "red", "c4" => "yellow");
print_r(array_unique($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
echo array_unshift($color1, "merun") . "<br>";
print_r($color1);

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(array_values($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(array_count_values($color1));

$color1 = array("red", "green", "blue", "yellow");

if (in_array("red", $color1)) {
    echo "Match found";
} else {
    echo "Match not found";
}

$color1 = array("red", "green", "blue", "yellow");
print_r(sort($color1));

$color1 = array("red", "green", "blue", "yellow");
print_r(rsort($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(ksort($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(krsort($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(asort($color1));

$color1 = array("c1" => "red", "c2" => "green", "c3" => "blue", "c4" => "yellow");
print_r(arsort($color1));

?>

