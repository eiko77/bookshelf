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
            text-align: left;
        }

        main {
            width: 100%;
        }

        h1 {
            font-size: 25px;
            margin-bottom: 0;
        }
        .inner{
            width: 580px;
        }

        .row {
            display: flex;
        }

        .row div {
            width: 120px;
            height: 120px;
            border: 1px solid black;
            font-size: 60px;
            text-align: center;
            line-height: 2;
        }

         .gamebox {
            justify-content: center;
            margin-left: 3rem;
        }

        .btn {
            background-color: gray;
            color: white;
            margin-left: 35%;
        }
        #result{
            font-size: 25px;
        }
        .pageback {
            text-align: left;
            margin-left: 3rem;
        }
    </style>
</head>

<body>
      
            <!-- Navigation-->
            <nav class="navbar navbar-light bg-light static-top">
            <div class="card-body">
                <div class="container1">
                    <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo"></a>
                    </div>
                    <div class="navbar-brand main_title">みんなの図書室

                    </div>
                </div>
            </nav>
            <main>
            <div class="p-3 mb-2 bg-warning text-white h5">
                三目並べ
            </div>
            <!-- header-->
            <br><br>
            
 {{-- <div class="inner"> --}}
            <header class="masthead">
                <div class="container position-relative">
            </header>       
            <div class="gamebox">
                <p id="result"></p>
                <div class="row">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="row">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="row">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
                <br>
                <p><input type="button" value="Restart" onclick="koshin()" class="btn"></p>
            </div>
        </main>
        <!-- 前のページに戻る -->
        <div class="pageback">
            <a href="#" onclick="history.back(-1);return false;">休憩室に戻る</a>
        </div>
    </div>   
</div>    
</body>
<script>
    'use strict'
    let count = 0
    //結果の受け皿 game
    const game = ['-', '-', '-', '-', '-', '-', '-', '-', '-']

    //div 9個マスの配列取得squareLisと個別の取得squar　→　配列gameに入れる
    const squareList = document.querySelectorAll('.row div')
    for (let i = 0; i < 9; i++) {
        const square = squareList[i]
        square.onclick = function() {
            if (count % 2 === 0) {
                square.textContent = "〇"
                game[i] = '〇'
                checkWin()
            } else {
                square.textContent = "✕"
                game[i] = '✕'
                //関数の実行
                checkWin()
            }
            console.log(game)
            count++
        }
    }
    //勝敗表示
    const result = document.getElementById('result')
    //更新ボタン
    function koshin() {
        location.reload();
    }
    //関数の宣言　checkWin()
    function checkWin() {
        //〇勝ち
        //横方向
        const row1 = game[0] === '〇' && game[1] === '〇' && game[2] === '〇';
        const row2 = game[3] === '〇' && game[4] === '〇' && game[5] === '〇';
        const row3 = game[6] === '〇' && game[7] === '〇' && game[8] === '〇';
        // 縦方向
        const col1 = game[0] === '〇' && game[3] === '〇' && game[6] === '〇';
        const col2 = game[1] === '〇' && game[4] === '〇' && game[7] === '〇';
        const col3 = game[2] === '〇' && game[5] === '〇' && game[8] === '〇';
        // 斜め方向
        const dia1 = game[0] === '〇' && game[4] === '〇' && game[8] === '〇';
        const dia2 = game[2] === '〇' && game[4] === '〇' && game[6] === '〇';
        //×勝ち
        //横方向
        const row11 = game[0] === '✕' && game[1] === '✕' && game[2] === '✕';
        const row22 = game[3] === '✕' && game[4] === '✕' && game[5] === '✕';
        const row33 = game[6] === '✕' && game[7] === '✕' && game[8] === '✕';
        // 縦方向
        const col11 = game[0] === '✕' && game[3] === '✕' && game[6] === '✕';
        const col22 = game[1] === '✕' && game[4] === '✕' && game[7] === '✕';
        const col33 = game[2] === '✕' && game[5] === '✕' && game[8] === '✕';
        // 斜め方向
        const dia11 = game[0] === '✕' && game[4] === '✕' && game[8] === '✕';
        const dia22 = game[2] === '✕' && game[4] === '✕' && game[6] === '✕';
        //引き分け
        if (row1 === true || row2 === true || row3 === true ||
            col1 === true || col2 === true || col3 === true ||
            dia1 === true || dia2 === true) {
            //console.log(window.confirm('〇の勝ち！'))
            result.textContent = '〇の勝ち！'
            result.style.color = 'red';

        } else if (row11 === true || row22 === true || row33 === true ||
            col11 === true || col22 === true || col33 === true ||
            dia11 === true || dia22 === true) {
            //console.log(window.confirm('×の勝ち！'))
            result.textContent = '×の勝ち！'
            result.style.color = 'red';

        } else if (count < 8) {
            result.textContent = '試合中'
            //引き分け            
        } else {
            result.textContent = '引き分け'
        }
    }
</script>
</body>
</html>
