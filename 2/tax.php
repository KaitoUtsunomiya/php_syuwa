<?php
    $price = 1000;
    $tax = $price * 0.08;
    $total = $price + $tax;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>消費税</title>
    </head>
    <body>
        税抜き価格は<?php echo $price; ?>円です。<br>
        消費税は<?php echo $tax; ?>円です。<br>
        税込価格は<?php echo $total; ?>円です。<br>
    </body>
</html>