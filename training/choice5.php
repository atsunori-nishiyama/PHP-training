<?php
$names = ["atsunori", "mami", "mirai", "uta"];

for ($i = 0; $i < 4 ; $i++) { 
  if ($names[$i] != "mirai") {
    echo "Hello ";
    echo $names[$i] . PHP_EOL;
  }
}