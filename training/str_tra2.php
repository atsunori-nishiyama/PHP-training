<?php
$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) { 
  $resulet = substr($colors[$i], 0, 1);
  echo $resulet . PHP_EOL;
}


?>