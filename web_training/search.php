<?php
// $name = $_GET["name"];
$name = (string)filter_input(INPUT_GET, "name");
//ユーザーが不正のパラメーターを送信してきた時、空文字に置き換える

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

<?
// $name = (string)filter_input(INPUT_GET, "name");
//空文字に置き換える 戻り値をキャスト string型に

//Filter input関数を使うと下記と同様の記述が可能となる
// $name = null;

// if (!isset($_GET["name"])) { //Nameが存在しない場合
//  $name = null;
// } else if (!is_string($_GET["name"])) { //文字列データかどうかをフィルタリング
//   $name = false;
// } else {
//   $name = $_GET["name"];
// }








// var_dump($name);
// die("debug"); //die関数でプログラムが一旦停止する

// ?>