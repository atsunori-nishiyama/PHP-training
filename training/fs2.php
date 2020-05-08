<?php
$file = "hello.txt";
$str = file_get_contents($file);
echo $str . PHP_EOL;

$file = "hello.txt";
$array = file($file, FILE_IGNORE_NEW_LINES);
print_r($array);


?>