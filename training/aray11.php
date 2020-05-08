<?php

$nmaes = ["atsunori", "mirai", "uta"];

$i = 0;
while ($i < count($nmaes)) { //count関数で要素数を求める
  echo "Hello ";
  echo $nmaes[$i] . PHP_EOL;
  $i++;
}