<?php
$fp = fopen("scores.csv", "r"); //戻り値にFileポインタが代入される
$scores = [];
$line = fgetcsv($fp); //1行の配列データを取得
while ($line !== false) {
  $scores[] = $line;
  $line = fgetcsv($fp);
}
fclose($fp); //FopenやFget関数を使ったら、忘れずに終了させる
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Scores</h3>
  <hr>
  <table border="1">
    <tr>
      <th>Sybject</th>
      <th>Name</th>
      <th>Score</th>
    </tr>
    <?php for ($i =0 ; $i < count($scores); $i++) { ?>
      <tr>
        <td><?php echo htmlspecialchars($scores[$i][0]); ?></td>
        <td><?php echo htmlspecialchars($scores[$i][1]); ?></td>
        <td><?php echo htmlspecialchars($scores[$i][2]); ?></td>
      </tr>
    <?php } ?>
    
  <table>
</body>
</html>
