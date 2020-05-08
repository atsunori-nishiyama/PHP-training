<?php
// $score = $argv[1];
// echo $score . PHP_EOL;
// var_dump($argv);

$score = $argv[1];

if ($argv[1] >= 80 ) {
  echo $score . " : A" .PHP_EOL;
} elseif ($argv[1] >= 60 /*&& $argv[1] <= 79*/ ) {
  echo $score . " : B" .PHP_EOL;
} else {
  echo "$score : C" .PHP_EOL;
}