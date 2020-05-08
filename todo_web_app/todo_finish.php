<?php
require_once("functions.php");
$id = (int)filter_input(INPUT_GET, "id",
FILTER_VALIDATE_INT);
if ($id <= 0) {
  redirect_with_message("todo_list.php",
  MESSAGE_ID_INVALID);
}

$lock_hadle = lock_file();

$todo_list = read_todo_list();
foreach ($todo_list as &$todo) { //&を付けることで、配列から要素を代入する際、参照データを代入出来る
  if ((int)$todo[0] === $id) {
    $todo[3] = STATUS_CLOSED;
  break;
  }
}
write_todo_list($todo_list);

unlock_file($lock_hadle);

redirect("todo_list.php");

?>