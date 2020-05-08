<?php
$file = "score.csv";
$handle = fopen($file, "r"); //読み取り専用
$line = fgetcsv($handle); //ExploadとFget｀を同時に行う

$scores = [];
while ($line !== false) {
  $scores[] = $line;
  $line = fgetcsv($handle);
}
fclose($handle);
$total = 0;
for ($i= 0 ; $i < count($scores); $i++) { 
  $score = $scores[$i];
  for ($j = 0; $j < count($scores); $j++) { 
    $total = $total + $score[$j];
  }
}
echo $total . PHP_EOL;





// $lines = file($file, FILE_IGNORE_NEW_LINES);
// $scores = [];
// for ($i = 0; $i < count($lines); $i++) { 
//   $line = $lines[$i];
//   $score = explode(",", $line);
//   $scores[] = $score;
// }
// $total = 0;
// for ($i= 0 ; $i < count($scores); $i++) { 
//   $score = $scores[$i];
//   for ($j = 0; $j < count($scores); $j++) { 
//     $total = $total + $score[$j];
//   }
// }
// echo $total . PHP_EOL;

?>