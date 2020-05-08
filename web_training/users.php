<?php
$handle = fopen("users.csv", "r");
$users = []; //空データ作成は鉄板

while (($line = fgetcsv($handle)) !== false) { //while文内に、$line変数を定義。その中にfgetcsv（,区切りの配列データ）関数で取得したデータを代入 
  $users[] = $line;
}
fclose($handle); //Fopenを使ったら最後忘れずに
// print_r($users);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Users</h3>
  <hr>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Age</th>
      <th>hoby</th>
      <th>play</th>
    </tr>
    <?php
      for ($i = 0; $i < count($users); $i++) { 
    ?>
    <tr>
      <td><?php echo $users[$i][0]; ?></td> <!--$usersで１個づつ（$i）取り出す。配列データの番号も忘れずに[0]※番号は1配列内の要素の数 -->
      <td><?php echo $users[$i][1]; ?></td>
      <td><?php echo $users[$i][2]; ?></td>
      <td><?php echo $users[$i][3]; ?></td>
      <td><?php echo $users[$i][4]; ?></td>
    </tr>

    <?php
      }
    ?>
    



  </table>

</body>
</html>