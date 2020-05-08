<?php
$score = ["english" => 90 , "math" => 88, "science" => 80];

// $total = $score["english"] + $score["math"] + $score["science"];

// echo $total .PHP_EOL;

$total = 0; //初期化
foreach ($score as $key => $value) {
  $total = $total + $value;
}
echo $total . PHP_EOL;

?>