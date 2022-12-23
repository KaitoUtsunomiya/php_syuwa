<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>foreach</title>
    </head>
    <body>
        <?php
            $product_list = array(
                "001" => "itemA",
                "002" => "itemB",
                "003" => "itemC",
            );

            $output = "<table border='1'>";
            $output .= "<tr><th>製品コード</th><th>製品名</th></tr>";

            foreach($product_list as $product_code => $product_name){
                $output .= "<tr>";
                $output .= "<td>" . $product_code . "</td>";
                $output .= "<td>" . $product_name . "</td>";
                $output .= "</tr>";
            }

            $output .= "</table>";

            echo $output;
        ?>
    </body>
</html>