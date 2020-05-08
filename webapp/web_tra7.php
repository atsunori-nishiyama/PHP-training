<?php
session_start();
$cart = [];
if (isset($_SESSION["cart"])) {
  $cart = $_SESSION["cart"];
}
if (isset($_GET["item"])) {
  $cart[] = $_GET["item"];
}
$_SESSION["cart"] = $cart;
$items = implode(",", $cart);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Shop</h3>
  <p>Cart: <?php echo $items; ?></p>
  <hr>
  <ul>
    <li><a href="web_tra7.php?item=apple">Apple</a></li>
    <li><a href="web_tra7.php?item=orange">Orange</a></li>
    <li><a href="web_tra7.php?item=Banana">Banana</a></li>
  </ul>
</body>
</html>