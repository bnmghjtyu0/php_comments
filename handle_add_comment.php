<?php
    require_once('./conn.php');

    $nickname = $_POST['nickname'];
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