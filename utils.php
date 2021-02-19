<?php
    require_once('./conn.php');
    function genToken() {
        $s = '';
        for($i;$i<=16;$i++) {
            // chr 轉大寫
            // rand 65~90 產稱一組英文字母
            $s .= chr(rand(65,90));
        }
        return $s;
    }

    function getUserFromToken($token){
        global $conn;

        $sql = sprintf("select username from tokens where token = '%s'", $token);
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $username = $row['username'];

        $sql = sprintf("select * from users where username = '%s'", $username);
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row; //username, id, nickname
    }

    // 處理 XSS 的問題
    function escape($str) {
        return htmlspecialchars($str, ENT_QUOTES);
    }

?>