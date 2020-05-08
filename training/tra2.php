<?php
$nmaes = ["atsunori", "mami", "mirai", "uta"];

for ($i = 0; $i < count($nmaes); $i++) { 
  $no = $i + 1;
  echo $no . ":" . $nmaes[$i] . PHP_EOL;
}