<?php
require_once("functions.php");

if (count($argv) != 2) {
  die(MESSAGE_ID_INVALID . PHP_EOL);
}

$id = (int)$argv[1]; //INT型のIDを入力
if ($id <= 0) {
  die(MESSAGE_ID_INVALID . PHP_EOL);
}

$todo_list = read_todo_list();
foreach ($todo_list as &$todo) { //ループの中で要素を直接変更したい場合、＆を付ける
    if ((int)$todo[0] === $id) {
      $todo[3] = STATUS_CLOSED;
    break;
  }
}
write_todo_list($todo_list);

?>