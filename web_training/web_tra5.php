<?php
$subject = $_POST["subject"];
$name = $_POST["name"];
$score = $_POST["score"];

$line = "$subject,$name,$score" . PHP_EOL; //変数展開

file_put_contents("scores.csv", $line, FILE_APPEND | LOCK_EX);
//ビット演算子（|）を使い定数を組み合わす.ファイルの上書き、排他ロック

header("Location: web_tra3.php");

