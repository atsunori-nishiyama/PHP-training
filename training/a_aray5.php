<?php
$scores = [
  ["english" => 90, "math" => 88, "science" => 80],
  ["english" => 64, "math" => 72, "science" => 72],
  ["english" => 90, "math" => 92, "science" => 94]
];

$math_total = 0;
for ($i = 0; $i < count($scores); $i++) { 
  $score = $scores[$i];
  $math_total = $math_total + $score["math"];
}
echo $math_total . PHP_EOL;



// $total = 0;
// foreach ($scores["math"] as $key => $value) {
//   $total = $total + $scores["math"];
// }

// echo $total . PHP_EOL;

?>