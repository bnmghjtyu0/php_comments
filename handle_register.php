<?php
    session_start();
    require_once('./conn.php');

    $nickname = $_POST['nickname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT); //hash sha256
    
    if(empty($nickname) || empty($username) || empty($password)) {
        die('請檢查資料');
    }

    echo $nickname . $username . $password;


    // 寫入資料庫
    $sql = sprintf("INSERT INTO users(nickname, username, password) values('%s','%s','%s')",$nickname,$username,$password);
    
    $result = $conn->query($sql);

    if($result) {
        echo "success";
        //註冊完之後，直接給 session，直接登入
        $_SESSION['username'] = $username;
        header("Location: ./index.php");
    }else {
        header("Location: register.php?errCode=2");
        echo "failed, " . $conn->error; //取得錯誤訊息
    }
?>