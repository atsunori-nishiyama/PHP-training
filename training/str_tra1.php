<?php
$colors = ["Red", "Green", "Blue"];

// $imp = implode(",", $colors);
// $str = strtoupper($imp);
// // $str = strtoupper($colors);
// echo $str . PHP_EOL;

for ($i = 0; $i < count($colors); $i++) { 
  $ruslet = strtoupper($colors[$i]);
  echo $ruslet . PHP_EOL;
}


?>