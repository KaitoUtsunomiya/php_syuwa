<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>受信</title>
    </head>
    <body>
        <p>送信されたメールアドレスは<?php echo htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8"); ?> です。</p>
    </body>
</html>