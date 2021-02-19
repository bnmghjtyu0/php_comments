<?php
    require_once('./conn.php');

    // 刪除資料庫裡面的 tokens 資料表裡面對應的 token 資料
    $token = $_COOKIE['token'];
    $sql = sprintf("delete from tokens where token ='%s'",$token);
    $conn->query($sql);

    // 刪除 cookies 裡面的 token
    setcookie("token", "", time() - 3600);
    // redirect to index.php
    header("Location: ./index.php");
?>