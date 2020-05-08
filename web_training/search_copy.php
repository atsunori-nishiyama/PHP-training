<?php
$name = $_GET["name"];
$names = file("names2.txt", FILE_IGNORE_NEW_LINES);
$searched_names = [];

if ($name !== "") { //Nameが空でない場合、
  for ($i = 0; $i < count($names); $i++) { //Nameファイル内のデータを１個づつ取得
    if (strpos($names[$i], $name) !== false) { //Nameデータの数値と、Namesファイルの数値を照合、Falseでなければ処理
      $searched_names[] = $names[$i];
    }
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Search</h3>
  <hr>
  <ul>
    <?php
    for ($i = 0; $i < count($searched_names); $i++) { 
    ?>

      <li><?php echo $searched_names[$i]; ?></li>

    <?php 
    } 
    ?>

  </ul>
</body>
</html>