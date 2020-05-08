<?php
session_start(); //まずはsession_start

if (!isset($_SESSION["id"])) {
  header("Location: login.html");
  return;
}

$id = $_SESSION["id"];
$time = $_SESSION["time"];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Menu = "HELLO" <?php echo $id; ?></h3>
  <h5>Login at <?php echo $time; ?></h5>
  <hr>
  <ul>
    <li><a href="logout.php">logout</a></li>
  </ul>
</body>
</html>