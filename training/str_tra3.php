<?php
$str = "Hyper-Text-Markup-Language";

$array = explode("-", $str); //ハイフン付きの配列データに変換する
for ($i = 0; $i < count($array) ; $i++) { 
  $result = substr($array[$i], 0, 1);
  echo $result;
}

?>