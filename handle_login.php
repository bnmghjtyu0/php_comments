<?php
    require_once('./conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if( empty($username) || empty($password)) {
        die('請檢查資料');
    }

    echo  $username . $password;


    // 寫入資料庫
    $sql = sprintf("select * from users where username='%s' and password = '%s'",$username,$password);
    
    $result = $conn->query($sql);

    if(!$result) {
        die($conn->error);
    }

    if($result->num_rows) {
        //登入成功
        $expire  = time() + 3600 * 24*30;
        setcookie("username",$username,$expire);
        header("Location: ./index.php");
    }else {
        header("Location: ./index.php?errCode=2");
    }

    ?>