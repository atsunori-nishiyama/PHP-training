<?php
$scores = [90, 72, 58, 80];

for ($i = 0; $i < count($scores); $i++) { 
  $score = $scores[$i];
  if ($score >= 80) {
    echo "$score : A" . PHP_EOL;
  } elseif ($score >= 60) {
    echo "$score : B" .PHP_EOL;
  } else {
    echo "$score : C" .PHP_EOL;
  }
}
?>