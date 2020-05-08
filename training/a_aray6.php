<?php
$countries = [
  "japan" => ["Tokyo", "Osaka", "Nagoya"],
  "England" => ["London", "Birmingam", "Glasgow"],
  "France" => ["Paris", "Marseille", "Lyon"]
];

$cities = $countries["England"]; //まずはEnglandにAccesseする
for ($i = 0; $i < count($cities); $i++) { 
  echo $cities[$i] . PHP_EOL;
}

?>