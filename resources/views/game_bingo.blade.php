<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>みんなの図書室</title>
    <!-- CSS_これはいれるらしい-->
    <link rel="stylesheet" href="/css/style.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .innner {
            width: 100%;
            background-color: white;
            margin: 0 auto 0 auto;
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

        body {
            margin: 5px;
            width: 580px;
        }

        main {
            width: 100%;
            margin: 0 auto 0 30%;
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
            margin: 0 auto 0 30%;
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

        #result {
            font-size: 100px;
            color: red;
            font-weight: bold;
            position: relative;  
            position: absolute;
            /* width: 400px; */
            margin-top: 3rem;
            margin-left: 2rem;
            background-color: rgb(232, 240, 220);
            border-radius: 8px;
        }

        .pageback {
            display: block;
            text-align: right;
            margin-right: -5rem;

        }

        .gamebox {
            justify-content: center;
            margin-left: 5rem;
        }

        .btn {
            background-color: gray;
            color: white;
            margin-top: 1rem;
            margin-left: 60%;
        }
    </style>
</head>

<body>
    <div class="inner">
        <!-- header-->
        <header class="masthead">
            <div class="container position-relative">
        </header>
        <main>
            <!-- Navigation-->
            <nav class="navbar navbar-light bg-light static-top">
                <div class="container">
                    <div><a href="/"> <img src="{{ url('img/logo.png') }}" class="logo"> </a> </div>

            </nav>
            <div class="p-3 mb-2 bg-warning text-white h5">
                Bingo
            </div>


            <div class="gamebox">
                <div id="char">
                    <div>B</div>
                    <div>I</div>
                    <div>N</div>
                    <div>G</div>
                    <div>O</div>
                </div>
                <p id="result"></p>
                <div id="board"></div>
                <p><input type="button" value="Restart" onclick="reStart()" class="btn"></p>
            </div>
        </main>
        <br>
        <!-- aタグ　前のページに戻る -->
        <div>
            <a href="#" onclick="history.back(-1);return false;" class="pageback">休憩室に戻る</a>
        </div>
    </div>
</body>
<script>
    'use strict'
    const game = Array.from({
        length: 25
    }, () => '_')
    const result = document.getElementById('result')

    function reStart() {
        location.reload();
    }
    //関数　勝敗判定----------------------------
    function checkBingo() {
        const row1 = game.slice(0, 5).every(square => square === '★')
        const row2 = game.slice(5, 10).every(square => square === '★')
        const row3 = game.slice(10, 15).every(square => square === '★')
        const row4 = game.slice(15, 20).every(square => square === '★')
        const row5 = game.slice(20, 25).every(square => square === '★')

        const col1 = game.filter((_, index) => index % 5 === 0).every(square => square === '★')
        const col2 = game.filter((_, index) => index % 5 === 1).every(square => square === '★')
        const col3 = game.filter((_, index) => index % 5 === 2).every(square => square === '★')
        const col4 = game.filter((_, index) => index % 5 === 3).every(square => square === '★')
        const col5 = game.filter((_, index) => index % 5 === 4).every(square => square === '★')

        const dia1 = game.filter((_, index) => index % 6 === 0).every(square => square === '★')
        const dia2 = game.filter((_, index) => index % 4 === 0 && index !== 0 && index !== 24).every(square =>
            square === '★')

        if (row1 === true || row2 === true || row3 === true || row4 === true || row5 === true ||
            col1 === true || col2 === true || col3 === true || col4 === true || col5 === true ||
            dia1 === true || dia2 === true) {
            result.textContent = 'BINGO!'

        }
    }
    //重複しない番号を作る
    const numberList = []
    const makeNumber = (n) => {
        let randomNumber = 0;
        while (true) {
            randomNumber = Math.floor(Math.random() * 15 + 1 + 15 * n);
            if (!numberList.includes(randomNumber)) {
                numberList.push(randomNumber)
                break
            }
        }
        return randomNumber
    }

    ////////////////////////////////////////////////////////////
    const board = document.querySelector('#board');

    for (let i = 0; i < 25; i++) {
        const square = document.createElement('div')

        function numClicked() {
            if (i === 12) {
                square.classList.remove('center')
            }
            square.textContent = '★';
            square.style.backgroundColor = 'lightblue';
            game[i] = '★';
            checkBingo()
        }

        if (i === 12) {
            square.textContent = 'Free'
            square.classList.add('center')


        } else if (i < 5) {
            square.textContent = makeNumber(0)

        } else if (i < 10) {
            square.textContent = makeNumber(1)


        } else if (i < 15) {
            square.textContent = makeNumber(2)


        } else if (i < 20) {
            square.textContent = makeNumber(3)


        } else {
            square.textContent = makeNumber(4)

        }
        square.onclick = numClicked;
        board.appendChild(square);
    }
</script>
</div>

</html>
