<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>みんなの図書室</title>
    <!-- CSS_これはいれるらしい-->
    <link rel="stylesheet" href="/css/style.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .innner {
            width: 80vw;
            background-color: white;
        }

        .container1 {
            display: flex;
        }

        .container2 {
            display: flex;
            justify-content: space-around;
        }

        .container3 {
            display: flex;
            justify-content: start;
        }

        .loginbtn {
            text-align: right;
        }

        .logo {
            width: 150px;
        }

        .img-fluid {
            width: 100%;
        }

        .img-fluid2 {
            width: 20%;
        }

        .card {
            height: 380px;
        }

        h6 {
            font-weight: bold;
        }

        ul {
            list-style: none;
        }

        .box_sublavel {
            color: green;
        }

        .news_date {
            color: green;
        }

        .card_msg {
            font-size: 13px;
        }

        .pageback {
            margin-left: 2%;
        }

        .sp {
            width: 100px
        }

        .img-mini {
            width: 2rem;
            margin-top: -5px;
            margin-left: -15px;
        }

        .game_msg {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="inner">
        <!-- header-->
        <header class="masthead">
            <div class="container position-relative">
                <!-- Navigation-->
                <nav class="navbar navbar-light bg-light static-top">
                    <div class="container1">
                        <div><a href="/"> <img src="{{ url('img/logo.png') }}" class="logo"> </a> </div>
                        <div class="sp"></div>
                        <div><a class="navbar-brand" href="#!">休憩室</a> </div>
                    </div>
                </nav>
        </header>
        <!-- コンテナーボタン-->
        <section>
            <div class="container">
                <br>
                <div class="container3">
                    <div class="news_img">
                        <img src="{{ url('img/shiori_01.png') }}" alt="top_image" class="img-mini">
                    </div>
                    <div class="game_msg">ゲームの作成が完成した方、是非リンクさせてください</div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">三目ならべ</div>
                            <p class=" mb-0">一人二役で〇×ゲーム</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <button type="submit" class="btn btn-outline-warning btn-lg col-6" onclick="location.href='/sanmoku'">
                                三目ならべ</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 "> ビンゴ</div>
                            <p class=" mb-0">素数を見つけるとわくわくする人へ</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <button type="submit" class="btn btn-outline-warning btn-lg col-6" onclick="location.href='/bingo'">
                                ビンゴ</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">神経衰弱</div>
                            <p class=" mb-0">シマエナガさん達が待ってます</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <button type="submit" class="btn btn-outline-warning btn-lg col-6" onclick="location.href='/nervous'">神経衰弱</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">今週のITクイズ</div>
                            <p class=" mb-0">休憩時間さえも惜しんで勉強したい人</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <button type="submit" class="btn btn-outline-warning btn-lg col-6" onclick="location.href='/quiz'">クイズ</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- 画像-->
    <div><img src="{{ url('img/birds_line_04.png') }}" alt="top_image" class="img-fluid">
    </div>

    <!-- aタグ　前のページに戻る -->
    <br>
    <div class="pageback">
        <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
    </div>
    </div>
</body>
<footer>
    <br>
    <p class="text-muted small ms-5 mb-4 mb-lg-0 text-left">&copy;みんなの図書室委員会.2024</p>
    </div>
    </div>
</footer>

</html>