<?php
$names = file("names.txt", FILE_IGNORE_NEW_LINES);
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Names</h1>
  <ul>
  <?php
    for ($i = 0; $i < count($names); $i++) {
  ?>
    <li><?php echo $names[$i]; ?></li>
  <?php
    }
  ?>


    <li><?php echo $names[0]; ?></li>
    <li><?php echo $names[1]; ?></li>
    <li><?php echo $names[2]; ?></li>
  </ul>
  <hr>
  <p><?php echo $date; ?></p>
</body>
</html>