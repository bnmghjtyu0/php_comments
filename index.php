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
        <main class="board">
            <h2 class="border__title">Comments</h2>

            <form method="POST" action="./handle_add_comment.php">
    `           <div class="d-flex g-0 mb-3">
                    <label class="col-form-label me-3">暱稱: </label>
                    <div class="col-sm-6 d-flex align-items-center">
                        <!-- <span>Richard</span> -->
                        <input class="form-control"/>
                    </div>
                </div>
                <div class="d-flex flex-nowrap align-items-start">
                    <textarea name="content" row="12" class="form-control" style="height: 100px"></textarea>
                    <button type="submit" class="btn btn-outline-primary ms-3" style="white-space:pre;">送出</button>
                </div>
            </form>

            <div class="board__hr"></div>

        <section class="mb-2">
            <div class="card d-flex flex-row border-0">
                        <div class="card__header">
                            <div class="card__avatar"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__info">
                                <span class="card__author">richard</span>
                                <span class="card__time">2021-12-12</span>
                            </div>
                            <div class="card__content">留言內容留言內容留言內容留言內容留言內容留言內容留言內容</div>
                        </div>
                    </div>
        </section>

        <section class="mb-2">
            <div class="card d-flex flex-row border-0">
                        <div class="card__header">
                            <div class="card__avatar"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__info">
                                <span class="card__author">richard</span>
                                <span class="card__time">2021-12-12</span>
                            </div>
                            <div class="card__content">留言內容留言內容留言內容留言內容留言內容留言內容留言內容</div>
                        </div>
                    </div>
        </section>


        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>