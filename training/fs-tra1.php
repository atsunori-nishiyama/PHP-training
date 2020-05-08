<?php
$file = "score.txt";
// $lines = file($file, FILE_IGNORE_NEW_LINES);
// $total = array_sum($lines);
// echo $total . PHP_EOL;

$handle = fopen($file, "r");
$line = fgets($handle);

$scores = [];
while ($line !== false) {
  $scores[] = trim($line);
  $line = fgets($handle);
}
fclose($handle);
$total = array_sum($scores);
echo $total . PHP_EOL;


?>