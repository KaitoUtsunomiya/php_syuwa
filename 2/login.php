<?php
session_start();
require_once("function.php");

$message = "";

if(isset($_POST["user_id"])){
    if($_POST["user_id"] == "test"){
        $_SESSION["user_id"] = $_POST["user_id"];
        transfer("members.php");
    }
    else{
        $message = "ログインに失敗しました";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <?php echo $message; ?>
        <form action="login.php" method="post">
            ユーザーID：<input type="text" name="user_id"><br>
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>