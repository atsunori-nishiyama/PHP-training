<?php
$id = $_POST["id"];
$password = $_POST["password"];

// $message = "NG";
if ($id === "Andy" && $password === "secret") {
  session_start(); //session_start関数を呼び出す
  $_SESSION["id"] = $id;
  $_SESSION["time"] = date("Y-m-d H:i:s"); //連想配列のように記述する

  header("Location: menu.php");
} else {
  header("Location: login.html");
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
  <h1>Login <?php echo $message; ?></h1>
</body>
</html>