<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>みんなの図書室</title>
   
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

        .main_title {
            text-align: center;
       
        }

        .loginbtn {
            text-align: right;
            margin-right: 20px;
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
            height: 350px;
        }
        .card1{
            background-color: white;
        }
        .card2{
            background-color: #f3f3f0;
        }
        .card3{
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
            margin-top: 10%;
            margin-bottom: 0.5%;
            text-align: center;
            border: none;
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
        .btn-sub{
        background-color: #abcca3;
        color: white;
        margin-bottom: 2rem;
    }
        /* Googleマップ を利用する場合*/
        #location {
            padding: 4% 0;
        }

        /* #location .wrapper {
            display: flex;
            justify-content: space-between;
        } */

        .location-info {
            width: 70%;
            margin-left: 5%;
        }

        .location-info p {
            padding: 12px 10px;
        }

        .location-map {
            width: 100%;
            margin-left: 5%;
        }

        iframe {
            width: 80%;
        }
        /* ここまで　Googleマップ を利用する場合*/  
   
    
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
                        <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
                        <div class="navbar-brand main_title">みんなの図書室</div>
                    </div>
                    <div class="loginbtn">
                        <a class="btn btn-success loginbtn" href="#signup">Sign Up</a> </div>
            </div>
    </div>
    </nav>
    </header>

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
                        <a href="{{route('search')}}">
                        <button class="btn btn-success btn-lg col-6">
                            本を探す</button></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                        <div class="h4 "> 本を借りる・返す</div>
                        <p class=" mb-0">返却期限は卒業まで　大切に読んでね</p><br>
                        <!--「本を探すボタン」ボタン-->
                        <a href="{{route('find')}}">
                        <button class="btn btn-success btn-lg col-6">
                            借りる・返す</button></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto mt-5 mb-5 mb-lg-0 mb-lg-3">
                        <div class="h4 ">本の管理</div>
                        <p class=" mb-0">本棚の本を増やすときはこちらから</p><br>
                        <!--「本を探すボタン」ボタン-->
                        <a href="{{route('books')}}">
                        <button class="btn btn-success btn-lg col-6">本を管理</button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!--------------------------------ここまで完了------------------------------------------------>
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
                                            <img src="{{ url('img/shiori_01.png') }}" alt="top_image" class="img-mini">
                                        </div>
                                        <div class="news_date">2024.01.30　　</div>
                                        <div class="news_copy">16時~ 放課後プチお別れ会
                                            <br>佐藤さんの就職が決まり１月末で卒業します
                                        </div>
                                    </div>
                                    <br>
                                    <!-- お知らせ２-->
                                    <div class="container3">
                                        <div class="news_img">
                                            <img src="{{ url('img/shiori_01.png') }}" alt="top_image" class="img-mini">
                                        </div>
                                        <div class="news_date">2024.01.28　　</div>
                                        <div class="news_copy">〇〇県立高等技術専門校展の開催について
                                            <br>職業訓練生の作品を展示・販売します！
                                        </div>
                                    </div>
                                    <br>
                                    <!-- お知らせ２-->
                                    <div class="container3">
                                        <div class="news_img">
                                            <img src="{{ url('img/shiori_01.png') }}" alt="top_image" class="img-mini">
                                        </div>
                                        <div class="news_date">2024.12.25　　</div>
                                        <div class="news_copy">新年会2024★のお誘い
                                            <br>参加できる方は幹事まで
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
                                    <div class="mt-2 card_msg">AWSの最初に知っておきたいAWS全運用を体系立てて解説。クラウドならではのアカウント管理から、定番のログ管理、監視、バックアップ/リストアに加えて、パッチ適用やセキュリティ、監査対応、コスト最適化に至るまで幅広く説明があり、入門者にも比較的分かりやすい記述です。</div>
                                </div>
                           
                                <!-- 箱内画像を入れる場合-->
                                {{-- <div class="text-center mt-4">
                                    <img class="card-img-top img-thumbnail w-25" src="../img/teacher_01.png" alt="teacher image">
                                </div>   --}}

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
                         <a href="{{route('games')}}">
                            <button class="btn btn-outline-warning btn-lg col-6 enter">
                                Enter</button>
                            </a>
                             <br>
                            <div>
                                    <img class="img-thumbnail img_rest" src="{{ url('img/rest03.jpg') }}" alt="rest image" >        
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
    <!--Googleマップを使う場合---------------------------------------------------------->
    <section id="location">
        <div class="wrapper">
            <div class="location-info">
                <h5 class="sub-title">〇〇県立高等技術専門校 <br>ITシステム科</h5>
                <div class="under_line"></div>
                {{-- <p>住所：奈良県磯城郡△△町<br>
                    電話：0742-00-0000</p> --}}
            </div>
            <br>
            <div class="location-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2594878096306!2d135.7812728743347!3d34.572300172965456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013184c8eeac3d%3A0xa6c8f0cff7705c85!2z5aWI6Imv55yM56uL6auY562J5oqA6KGT5bCC6ZaA5qCh!5e0!3m2!1sja!2sjp!4v1707206820261!5m2!1sja!2sjp" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------->
    <footer>
        <div class="container">
            <div class="box"></div>
            <div class="text-muted small ms-5 mb-4 mb-lg-0 text-left">&copy;みんなの図書室委員会.2024</div>
        </div>
    </footer>
    </div>
</body>
</html>