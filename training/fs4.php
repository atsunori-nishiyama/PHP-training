<?php 
$file = "helloo.txt";
$hadle = @fopen($file, "r");
if ($hadle === false) {
  die("can't open file");
}

while (($line = fgets($hadle)) !== false) {
  echo $line;
}

fclose($hadle);



?>