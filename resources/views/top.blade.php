<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>みんなの図書室</title>
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    
    <!-- Styles -->
    <style>
        /* .inner {
            width: 80vw;
            background-color: white;
        } */
        .navbar {
            margin-top: 0.3rem;
            margin-bottom: 0.3rem;
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

        .main_title {
            text-align: center;
        }

        .loginbtn {
            text-align: right;
            margin-right: 20px;
        }

        .logo {
            width: 170px;
        }

        .main_title {
            margin-left: 2rem
        }

        .img-fluid {
            width: 100%;
        }

        .img-fluid2 {
            width: 20%;
        }

        .card {
            height: 350px;
        }

        .card1 {
            background-color: white;
        }

        .card2 {
            background-color: #f3f3f0;
        }

        .card3 {
            background-color: white;
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

        .news_img {
            width: 10%;
        }

        .news_copy {
            font-size: 0.9rem;
        }

        .card_msg {
            font-size: 0.9rem;
            width: 80%;
            text-align: left;
            margin: 2rem;
        }

        .img-mini {
            width: 3rem;
            margin-top: -5px;
            margin-left: -15px;
        }

        .img_rest {
            margin-top: 7%;
            margin-bottom: 0.5%;
            text-align: center;
            border: none;
            width: 60vw;
        }

        .img-click {
            width: 5rem;
            position: relative;
        }

        .under_line {
            background-color: #ABCCA3;
            height: 0.2rem;
            width: 15rem;
            margin-top: 0;
        }

        .btn-sub {
            background-color: #abcca3;
            color: white;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- header-->
        <header class="masthead">
            <div class="container position-relative">
                <!-- Navigation-->
                <nav class="navbar navbar-light bg-light static-top">
                    <div class="container1">
                        <div><a href="#" onclick="history.back(-1);return false;"><img
                                    src="{{ url('img/logo.png') }}" class="logo">
                            </a></div>
                        <div class="navbar-brand main_title">みんなの図書室</div>
                    </div>
                    <div class="loginbtn">
                        <a class="btn btn-success loginbtn" href="#signup">Sign Up</a>
                    </div>
            </div>
    </div>
    </nav>
    </header>

    <div class="inner">
        <!-- トップ画像-->
        <div><img src="{{ url('img/book01_3w14.png') }}" alt="top_image" class="img-fluid">
        </div>
        <!-- コンテナーボタン-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">本を探す</div>
                            <p class=" mb-0">IT関連の本、いっぱいあります</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <a href="{{ route('search') }}">
                                <button class="btn btn-success btn-lg col-6">
                                    本を探す</button></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 "> 本を借りる・返す</div>
                            <p class=" mb-0">返却期限は卒業まで　大切に読んでね</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <a href="{{ route('find') }}">
                                <button class="btn btn-success btn-lg col-6">
                                    借りる・返す</button></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">本の管理</div>
                            <p class=" mb-0">本棚の本を増やすときはこちらから</p><br>
                            <!--「本を探すボタン」ボタン-->
                            <a href="{{ route('books') }}">
                                <button class="btn btn-success btn-lg col-6">本を管理</button>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- コンテナーボタン-->
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="card box2 card1">
                                <!-- 箱2タイトル-->
                                <div class="card-body">
                                    <div class="h6 ">おしらせボード</div>
                                    <div class="under_line"></div>
                                    <!-- 箱サブタイトル-->
                                    <div class="ms-3 mt-2">
                                        <!-- お知らせ１-->
                                        <div class="container3">
                                            <div class="news_img">
                                                <img src="{{ url('img/shiori_01.png') }}" alt="top_image"
                                                    class="img-mini">
                                            </div>
                                            <div class="news_date">2024.03.22　　</div>
                                            <div class="news_copy">修了式
                                                <br>新しい出発ですね。それぞれの道で学んだことを活かせるよう頑張りましょう。
                                            </div>
                                        </div>
                                        <br>
                                        <!-- お知らせ２-->
                                        <div class="container3">
                                            <div class="news_img">
                                                <img src="{{ url('img/shiori_01.png') }}" alt="top_image"
                                                    class="img-mini">
                                            </div>
                                            <div class="news_date">2024.03.19　　</div>
                                            <div class="news_copy">17時半～ ITシステム科★お別れ会
                                                <br>ajito大和八木店　
                                            </div>
                                        </div>
                                        <br>
                                        <!-- お知らせ２-->
                                        <div class="container3">
                                            <div class="news_img">
                                                <img src="{{ url('img/shiori_01.png') }}" alt="top_image"
                                                    class="img-mini">
                                            </div>
                                            <div class="news_date">2024.01.28　　</div>
                                            <div class="news_copy">高等技術専門校展の開催
                                                <br>生徒の作品を展示・販売します。
                                            </div>
                                        </div>
                                   
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="card card2">
                                <!-- 箱１タイトル-->
                                <div class="card-body">
                                    <div class="h6 box_title">Tukky先生のおすすめ本</div>
                                    <div class="under_line"></div>
                                    <!-- 箱サブタイトル-->
                                    <div class="mx-auto ms-3 mt-2">
                                        <p class="card-subtitle box_sublavel">本のタイトル</p>
                                        <strong>「AWS運用入門<br>押さえておきたいAWSの基本と運用ノウハウ」</strong>
                                    </div>
                                    <!-- 箱内メッセ―ジ-->
                                    <div>
                                        <div class="mt-2 card_msg">
                                            AWSの最初に知っておきたい運用を体系立てて解説。クラウドならではのアカウント管理から、定番のログ管理、監視、バックアップ/リストア、パッチ適用やセキュリティ、監査対応、コスト最適化に至るまで幅広く説明があり、入門者にも比較的分かりやすい記述です。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="card card3">
                                <!-- 箱3タイトル-->
                                <div class="card-body">
                                 <div class="h6 ">休憩Room</div>
                                    <div class="under_line"></div>
                                    <br>
                                    <!--休憩ボタン　ボタン-->
                                    <a href="{{ route('games') }}">
                                        <button class="btn btn-outline-warning btn-lg col-6 enter">
                                            Enter</button>
                                    </a>
                                    <br>
                                    <div>
                                        <img class="img-thumbnail img_rest" src="{{ url('img/rest03.jpg') }}"
                                            alt="rest image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------------------------------------->
                </div> <!-- コンテナーホールド２_row 完了-->
            </div><!-- コンテナーホールド１完了-->

            <!-- 飾りの画像-->
            <div><img src="{{ url('img/birds_line_04.png') }}" alt="top_image" class="img-fluid">
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="box"></div>
                <div class="text-muted small ms-5 mb-4 mb-lg-0 text-left">&copy;みんなの図書室委員会.2024</div>
            </div>
        </footer>
    </div>
</body>
</html>
