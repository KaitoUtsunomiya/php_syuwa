<?php
session_start();
require_once("function.php");

$_SESSION = array();
session_destroy();

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログアウト</title>
    </head>
    <body>
        ログアウトしました。<br>
        <a href="login.php">ログインページへ</a>
    </body>
</html>