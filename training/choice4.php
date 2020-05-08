<?php
$diceA = 6;
$diceB = "6";
$diceC = (int)$diceB; //整数型に変換するキャスト

if ($diceA === $diceC) { //＝が2つの場合、""を外し、整数として認識する
  echo "Win";
} else {
  echo "Lose";
}