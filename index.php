<?php 
    require_once('./conn.php');
    require_once('./utils.php');

    $username = NULL;
    if(!empty($_COOKIE['token'])) {
        $user = getUserFromToken($_COOKIE['token']);
        $username = $user['username'];
    }

    $sql = "select * from comments order by id desc";
    $result = $conn->query($sql);
    if(!$result) {
        die('Error' . $conn->error);
    }
    
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

    <div class="container-fluid">
<?php
    if(!$username) { ?>
        <a href="register.php" class="btn">註冊</a>
        <a href="login.php" class="btn">登入</a>
    <?php } else { ?>
        <a href="logout.php" class="btn">登出</a>
    <?php } ?>
      
        <main class="board">
            <h2 class="border__title">Comments</h2>


<?php if($username) { ?>

<form method="POST" action="./handle_add_comment.php">

            <!-- 改從註冊時輸入暱稱，登入後從資料庫取暱稱 -->
               <!-- <div class="d-flex g-0 mb-3">
                    <label class="col-form-label me-3">暱稱: </label>
                    <div class="col-sm-6 d-flex align-items-center">
                        <span>Richard</span>
                        <input class="form-control" name="nickname"/>
                    </div>
                </div> -->
                <div class="d-flex flex-nowrap align-items-start">
                    <textarea name="content" row="12" class="form-control" style="height: 100px"></textarea>
                    <button type="submit" class="btn btn-outline-primary ms-3" style="white-space:pre;">送出</button>
                </div>
            </form>
            <?php } else { ?>

                請登入發布留言
     <?php } ?>


            <div class="board__hr"></div>

            <?php
                while($row = $result->fetch_assoc()) {
            ?>
                <section class="mb-2">
                    <div class="card d-flex flex-row border-0">
                        <div class="card__header">
                            <div class="card__avatar"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__info">
                                <span class="card__author"><?php echo $row['nickname'] ?></span>
                                <span class="card__time"><?php echo $row['created_at'] ?></span>
                            </div>
                            <div class="card__content"><?php echo $row['content'] ?></div>
                        </div>
                    </div>
                </section>
            <?php } ?>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>