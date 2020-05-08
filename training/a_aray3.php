<?php
$students = [
  ["name" => "Abdy" , "age" => 20],
  ["name" => "Betty" , "age" => 19],
  ["name" => "Carol" , "age" => 30]
];

for ($i = 0; $i < 3 ; $i++) { 
  $age = $students[$i]["age"];
  $name = $students[$i]["name"];
  if ($age >= 20) {
    echo $name . " OK". PHP_EOL;
  } else {
    echo $name . " NG" . PHP_EOL;
  }
}


?>