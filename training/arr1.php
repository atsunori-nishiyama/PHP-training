<?php 
$array = ["Andy", "Betty", "Carol"];
$length = count($array);
echo $length . PHP_EOL;

// $reverse_array = array_reverse($array);
// print_r($reverse_array) . PHP_EOL;

$array_slice = array_slice($array, 1 , 1);
print_r($array_slice) . PHP_EOL;

sort($array);
print_r($array) . PHP_EOL;
?>