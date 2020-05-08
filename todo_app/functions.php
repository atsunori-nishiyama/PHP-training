<?php
define("STATUS_OPENED", "0");
define("STATUS_CLOSED", "1");
define("TODO_LIST_CSV", "todo_list.csv");

define("TASK_MAX_LENGTH", 140);
define("MESSAGE_TASK_EMPTY", "タスクが未入力です。");
define("MESSAGE_TASK_MAX_LENGTH", "タスクが140文字を超えています。");
define("MESSAGE_ID_INVALID", "入力されたIDは不正です。");

// Add 2019.11.21
if(0 === strpos(PHP_OS, 'WIN')) {
  // adjust fgetcsv locale for Windows PHP7
  setlocale(LC_CTYPE, 'C');
}

function read_todo_list($include_closed = true)
{
    $handle = fopen(TODO_LIST_CSV, "r");
    $todo_list = [];
    while ($todo = fgetcsv($handle)) { //ExplodeとFgetを同時に行う
        if (!$include_closed &&
          $todo[3] === STATUS_CLOSED) {
            continue;
        }
        $todo_list[] = $todo;
    }
    fclose($handle);
    return $todo_list;
}

function get_new_todo_id()
{
    return count(read_todo_list()) + 1;
}

function add_todo_list($todo)
{
    $handle = fopen(TODO_LIST_CSV, "a");
    fputcsv($handle, $todo);
    fclose($handle);
}

function write_todo_list($todo_list)
{
    $handle = fopen(TODO_LIST_CSV, "w");
    foreach ($todo_list as $todo) {
        fputcsv($handle, $todo);
    }
    fclose($handle);
}

