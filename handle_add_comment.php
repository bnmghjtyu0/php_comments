<?php
    require_once('./conn.php');
    require_once('./utils.php');

    $user = getUserFromToken($_COOKIE['token']);
    $nickname = $user['nickname'];
    $username = $_COOKIE['username'];
    
    $user_sql = sprintf("select nickname from users where username='$username'");
    $user_result = $conn->query($user_sql);
    $row = $user_result->fetch_assoc();

    $content = $_POST['content'];
    
    if(empty($nickname) || empty($content)) {
        die('請檢查資料');
    }

    echo $nickname . $content;


    // 寫入資料庫
    $sql = "INSERT INTO comments(nickname, content) VALUES('$nickname', '$content')";
    echo $sql;
    
    $result = $conn->query($sql);

    if($result) {
        echo "success";
        header("Location: ./index.php");
    }else {
        echo "failed, " . $conn->error; //取得錯誤訊息
    }
?>