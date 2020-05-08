<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $x + $y;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Calk</h3>
  <hr>
  <p>
    <?php echo $x; ?>
    +
    <?php echo $y; ?>
    =
    <?php echo $z; ?>
  </p>
</body>
</html>