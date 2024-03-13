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
        /* .innner {
            width: 80vw;
            background-color: white;
        } */

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

        /* .card {
            height: 380px;
        } */

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

        .inner {
            width: 580px;
        }

        h1 {
            font-size: 25px;
            margin-bottom: 0;
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

        #result {
            font-size: 18px;
            color: green;
        }

        main {
            width: 100%;
            margin: 0 auto 0 1rem;
        }

        #board {
            height: 410px;
            width: 400px;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }

        .center {
            font-size: 32px !important;
            background-color: rgb(251, 255, 0);
            text-align: center;
            line-height: 2;
        }

        #board div {
            width: 80px;
            height: 80px;
            border: 1px solid black;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            line-height: 2;
            margin: 0;
            padding: 0;
        }

        #char {
            width: 450px;
            height: 80px;
            display: flex;
        }

        #char div {
            width: 80px;
            height: 80px;
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            line-height: 2;
            margin: 0;
            padding: 0;
        }

        input {
            margin-top: -20px;
        }

        ul {
            list-style: none;
            font-size: 1.2rem;
        }

        ul li {
            border: solid 1px black;
            width: auto;
            height: 80px;
        }

        .pen {
            width: 50px;
        }

        .img-mini {
            width: 80%;
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
                    <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo"></a></div>
                    <div class="navbar-brand main_title">みんなの図書室</div>  
                </div>
            </nav>
            <div class="p-3 mb-2 bg-warning text-white h5">
                勉強クイズ
            </div>
            <!-- header-->
            <header class="masthead">
                <div class="container position-relative">
            </header>
            <br>
            <main>
                <div class="container3">
                    <div class="pen">
                        <img src="{{ url('img/pen_01.png') }}" alt="top_image" class="img-mini">
                    </div>
            <div class="innner">   
                <div class="h3">【ＡＷＳ編】</div>
               
                <br>

                <h5>１．クラウドにおける重要なアーキテクチャ原則は次のうちどれですか？</h5>
                <br>
                <ul>
                    <li class="fail">a.密結合なコンポーネントで構成</li>
                    <li class="answer">b.障害設計を実施する</li>
                    <li class="fail">c.サービスでなくサーバー</li>
                    <li class="fail">d.アプリケーション開発にあたり緻密に計画、設計を行う</li>
                </ul>
                <br>
                <h5>２．世界中のお客様に対して、低レイテンシーを提供する設計原則は？
                </h5>
                <br>
                <ul>
                    <li class="fail">a.従量課金制</li>
                    <li class="fail">b.疎結合</li>
                    <li class="fail">c.フォルトトレランス</li>
                    <li class="answer">d.グローバルリーチ</li>
                </ul>

                <br>
                <h5>３．必要に応じて自動的にストレージの拡張ができるＤＢサービスは？
                </h5>
                <br>
                <ul>
                    <li class="answer">a.Amazon Aurora</li>
                    <li class="fail">b.Amazon Ｓ３</li>
                    <li class="fail">c.Amazon Lightsail</li>
                    <li class="fail">d.Amazon ＥＣ２</li>
                </ul>

                <br>
                <h5>４．責任共有モデルにおいてＡＷＳ側の責任となる作業は？
                </h5>
                <br>
                <ul>
                    <li class="fail">a.脆弱性のあるポートを遮断するためのネットワークＡＣＬ更新</li>
                    <li class="fail">b.AmazonＥＣ2インスタンス上のオペレーティングシステムのパッチ適用</li>
                    <li class="answer">c.EC2の下層のファームウェア</li>
                    <li class="fail">d.脆弱性のあるポートを制限するためのネットワークＡＣＬ更新</li>
                </ul>

                <br>
                <h5>５．Amazon Recognitionによって実現できるものは？
                </h5>
                <br>
                <ul>
                    <li class="fail">a.チャットボットを作成できる</li>
                    <li class="fail">b.メールの文章の内容を機械的に理解し分類できる</li>
                    <li class="fail">c.テキストを多言語に翻訳できる</li>
                    <li class="answer">d.画像内の物体や人物を認識できる</li>
                </ul>
                <!-- 再チャレンジ -->
                <a href="{{ route('game_quiz') }}">
                    <button class="btn btn-warning btn-lg col-6 m-4">もう一度挑戦する</button></a>
               
        </main>
         <!-- 前のページに戻る -->
         <div class="pageback">
         <a href="#" onclick="history.back(-1);return false;">休憩室に戻る</a>
        </div>
    <script>
        'use strict'
        const answers = document.getElementsByClassName('answer');
        const fails = document.getElementsByClassName('fail');
        // 確認
        //console.log(answers)
        for (let i = 0; i < answers.length; i++) {
            answers[i].onclick = function() {
                // 文字を〇に変更する
                answers[i].textContent = "〇";
                // JavaScriptからCSSを変更する
                answers[i].style.color = "red";
                answers[i].style.fontSize= "50px";
            }
        }
        for (let i = 0; i < fails.length; i++) {
            fails[i].onclick = function() {
                // 文字を×に変更する
                fails[i].textContent = "×";
                fails[i].style.fontSize= "50px";
            }
        }
    </script>
</body>

</html>
