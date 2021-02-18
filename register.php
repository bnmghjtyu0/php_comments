<?php 
    require_once('./conn.php');
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header class="alert alert-danger text-center" role="alert">
        注意 ! 本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼。
    </header>


    <?php
        if(!empty($_GET['errCode'])) {
            $code = $_GET['errCode'];
            $msg = 'Error';
            if($code === '1') {
                $msg = '資料不齊全';
            }else if($code === '2') {
                $msg = '帳號已被註冊';
            }
            echo '<h2>錯誤:' . $msg . '</h2>';
        }
    
    ?>

    <div class="container-fluid">

        <a href="index.php" class="btn">回留言板</a>
        <a href="login.php" class="btn">登入</a>
        <main class="board">
            <h2 class="border__title">註冊</h2>

            <form method="POST" action="./handle_register.php">
                <div class="d-flex g-0 mb-3">
                    <label class="col-form-label me-3">暱稱: </label>
                    <div class="col-sm-6 d-flex align-items-center">
                        <!-- <span>Richard</span> -->
                        <input class="form-control" name="nickname"/>
                    </div>
                </div>
                <div class="d-flex g-0 mb-3">
                    <label class="col-form-label me-3">帳號: </label>
                    <div class="col-sm-6 d-flex align-items-center">
                        <!-- <span>Richard</span> -->
                        <input class="form-control" name="username"/>
                    </div>
                </div>
                <div class="d-flex g-0 mb-3">
                    <label class="col-form-label me-3">密碼: </label>
                    <div class="col-sm-6 d-flex align-items-center">
                        <!-- <span>Richard</span> -->
                        <input class="form-control" name="password" type="password"/>
                    </div>
                </div>
                <div class="d-flex flex-nowrap align-items-start">
                    <button type="submit" class="btn btn-outline-primary ms-3" style="white-space:pre;">送出</button>
                </div>
            </form>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>