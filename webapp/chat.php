<?php
$file = "../data/chat.txt";
$messages = file($file, FILE_IGNORE_NEW_LINES);
if ($_SERVER["REQUEST_METHOD"] === "POST") { //サーバーリクエストがPOSTかGETかを判定
  $message = (string)filter_input(INPUT_POST, "message");
  if ($message !== "") {
    $messages[] = $message;
    file_put_contents($file, $message .PHP_EOL,
                            FILE_APPEND | LOCK_EX);
                            //同時アクセスを回避。排他ロック
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
  <h3>Chat</h3>
  <hr>
  <form action="chat.php" method="post">
    <input type="text" name="message">
    <input type="submit" value="send">
  </form>
  <ul>
    <?php for ($i = 0; $i < count($messages); $i++) { ?>
      <li><?php echo htmlspecialchars($messages[$i], ENT_QUOTES);  ?></li>
    <?php } ?>

  </ul>
</body>
</html>