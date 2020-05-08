<?php
$message = "PHP Training";
echo $message . PHP_EOL;

$color1 = "red";
$color2 = " green";
$color3 = " yellow";
// $totalColor = $color1 . $color2 . $color3;
// echo $totalColor;
echo $color1;
echo ",";
echo $color2;
echo ",";
echo $color3;
echo "," . PHP_EOL;

$price = 100;
$count = 3;
$tax = 1.1;
$totalPrice = $price * $count * $tax;
echo $totalPrice;