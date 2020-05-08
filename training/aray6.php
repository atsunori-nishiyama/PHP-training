<?php
$nmaes = ["atsunori", "mirai", "uta"];
$temp = $nmaes[0];
$nmaes[0] = $nmaes[2];
$nmaes[2] = $temp;
var_dump($nmaes);