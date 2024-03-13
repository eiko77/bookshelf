<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>みんなの図書室 | 本の貸出サイト</title>
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <!-- スマホ向けicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.ico') }}" sizes="180x180">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}" sizes="192x192">

    <!-- 個別Style -->
    <style> 
        body {
          width: 100%;
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
            text-align: right;
            margin-right: 10%;
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

        .img-fluid {
            background-repeat: repeat-x;
        }

        .center {
            text-align: center;
        }

        footer {
            margin: 5rem;
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
                        <div class="card-body">
                            <div class="container1">
                                <div><a href="#" onclick="history.back(-1);return false;"><img
                                            src="{{ url('img/logo.png') }}" class="logo">
                                    </a></div>
                                <div class="navbar-brand main_title">みんなの図書室</div>
                            </div>
                        </div>
                    </nav>

            </header>
            <div class="p-3 mb-2 bg-warning text-white h5">
                休憩室（ゲームコーナー）
            </div>
            <div class="container">
                <br>
                <div class="container3">
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">三目ならべ </div>
                            <p class=" mb-0">一人二役やってもよし、友達と競ってもよし</p><br>
                            <!--「三目ならべ」ボタン-->
                            <a href="{{ route('game_sanmoku') }}">
                                <button class="btn btn-outline-warning btn-lg col-6">
                                    三目ならべ</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 "> ビンゴ</div>
                            <p class=" mb-0">ビンゴの中に素数を見つけるのも楽しみの一つ</p><br>
                            <!--「ビンゴボタン」ボタン-->
                            <a href="{{ route('game_bingo') }}">
                                <button class="btn btn-outline-warning btn-lg col-6">
                                    ビンゴ</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                            <div class="h4 ">勉強クイズ</div>
                            <p class=" mb-0">休憩時間さえも惜しんで勉強したい人</p><br>
                            <!--「クイズボタン」ボタン-->
                            <a href="{{ route('game_quiz') }}">
                                <button class="btn btn-outline-warning btn-lg col-6">
                                    クイズ</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Under 飾り画像-->
                <div class="center"><img src="{{ url('img/birds_line_04.png') }}" alt="top_image" class="img-fluid">
                </div>

                <!-- 前のページに戻る -->
                <br>
                <div class="pageback">
                    <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
                </div>
            </div>
            {{-- </section> --}}

            <footer>
                <div>
                    <p class="text-muted small ms-5 mb-4 mb-lg-0 text-left">&copy;みんなの図書室委員会.2024</p>
                </div>
            </footer>
        </div>
     </div>

</body>

</html>
