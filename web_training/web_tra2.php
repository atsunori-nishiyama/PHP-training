<?php
$scores = [90, 72, 58, 80];
$total = array_sum($scores);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Scores</h1>
  <hr>
  <ul>
    <?php
      for ($i =0  ; $i < count($scores); $i++) { 
    ?>
    <li><?php echo $scores[$i]; ?></li>
    <?php
      }
    ?>
  </ul>
  <p>Total: <?php echo $total; ?></p>
</body>
</html>