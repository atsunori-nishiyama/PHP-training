<?php
$str = "Hello World";
$lengh = strlen($str);
echo $lengh . PHP_EOL;

$str = "Hello World";
$lengh = strtolower($str);
echo $lengh . PHP_EOL;

$str = "Hello World";
$lengh = strtoupper($str);
echo $lengh . PHP_EOL;

$str = "Hello World";
$lengh = substr($str, 6);
echo $lengh . PHP_EOL;

$str = "Hello World";
$lengh = substr($str, 6, 5);
echo $lengh . PHP_EOL;

$str = "atunori,mami,mirai,uta";
$array = explode("," , $str);
print_r($array);


?>