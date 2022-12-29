<?php
function transfer($filename){
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://");
    $url .= $_SERVER["HTTP_HOST"] . dirname($_SERVER["SCRIPT_NAME"]);
    $url .= "/" . $filename;
    header("Location: " . $url);
    exit;
}

function login_check(){
    if(!isset($_SESSION["user_id"])){
        transfer("login.php");
    }
}
?>