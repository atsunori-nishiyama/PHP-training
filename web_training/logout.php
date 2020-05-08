<?php
session_start();

$_SESSION = [];

if (ini_get("session.use_cookies")) { //Sessionの内部でクッキーが使われているかどうかを確認する
 $params = session_get_cookie_params(); //Session get cookie関数を呼出し、Paramsに代入
 setcookie(session_name(), '', time() -42000, //過去の時間をSessionに入れる
           $params["path"], $params["domain"],
           $params["secure"], $params["httponly"]);
}


session_destroy();
header("Location: login.html");

?>