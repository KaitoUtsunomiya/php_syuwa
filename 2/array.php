<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>配列</title>
    </head>
    <body>
        <?php
            $irui1["shirt"] = "Tシャツ";
            $irui1["socks"] = "靴下";
            $irui1["pants"] = "半ズボン";

            $irui2 = array("shirt" => "Tシャツ",
                           "socks" => "靴下",
                           "pants" => "半ズボン",
                        );

            $irui3[] = "Tシャツ";
            $irui3[] = "靴下";
            $irui3[] = "半ズボン";

            $irui4 = array("Tシャツ","靴下","半ズボン");
            
            echo "<pre>";
            var_dump($irui1);
            var_dump($irui2);
            var_dump($irui3);
            var_dump($irui4);
            echo "</pre>";
        ?>
    </body>
</html>