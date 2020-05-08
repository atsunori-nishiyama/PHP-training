<?php
function double($x)
{
  return  $x * 2;
  }

$scores = [90, 72, 80];
for ($i=0; $i  < count($scores); $i++) { 
  $score = $scores[$i];
  $resule = double($score);
  echo $resule . PHP_EOL;

}


?>
