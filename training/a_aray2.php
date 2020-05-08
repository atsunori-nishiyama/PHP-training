<?php
$student = ["name" => "Andy" , "Age" => 20];
$student["height"] = 180;
$student["Age"] = 30;
unset($student["name"]);

var_dump($student);
// echo $student["height"] . PHP_EOL;
// echo count($student) . PHP_EOL;
// echo $student["Age"] . PHP_EOL;

?>