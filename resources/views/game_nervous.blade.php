<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>みんなの図書室</title>
  <!-- CSS_これはいれるらしい
    <link rel="stylesheet" href="/css/nervous.css">
     BootStrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="{{ asset('/js/nervous.js') }}"></script>
</head>
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

  input {
    margin-top: -20px;
  }

  .loginbtn {
    text-align: right;
  }

  .logo {
    width: 150px;
  }


  #cardgrid {
    width: 90%;
    margin: 10px auto;
    display: grid;
    grid-template-columns: repeat(13, 1fr);
    gap: 0.5vh;
  }

  div.card {
    aspect-ratio: 2 / 3;
    /* background-color: yellow; */
    /* コンテナいっぱいに画像を拡大縮小する */
    background-size: contain;
  }

  /* div要素でclassにbackがついている要素は裏面画像（importantルール適用） */
  div.back {
    background-image: url(../img/images/z01.gif) !important;
  }

  /*アニメーションの定義（名前はfadeout)*/
  @keyframes fadeout {
    40% {
      opacity: 1;
    }

    100% {
      opacity: 0;
    }
  }

  div.fadeout {
    /*使用するアニメーション名*/
    animation-name: fadeout;
    /*アニメーション時間*/
    animation-duration: 2s;
    /*アニメーション終了時の挙動*/
    animation-fill-mode: forwards;
  }

  h1 {
    font-family: sans-serif;
    font-size: 20px;
  }

  button {
    width: 100px;
    height: 40px;
    border-radius: 5px;

    background-color: gray;
    color: white;
    border: 0;

    font-size: 15px;
    margin-top: 2rem;
    margin-left: 2rem;
  }

  .sp {
    width: 90px
  }


</style>

<body>
  <div class="inner">
    <!-- header-->
    <header class="masthead">
      <div class="container position-relative">
    </header>

    <main>
      <!-- Navigation-->
      <nav class="navbar navbar-light bg-light static-top">
        <div class="container2">
          <div><a href="/"> <img src="{{ url('img/logo.png') }}" class="logo"> </a> </div>
          <div class="sp"></div>
          <div><a href="#!" class="navbar-brand" >神経衰弱</a> </div>
        </div>
      </nav>

      <div class="p-3 mb-2 bg-warning text-white h5">
     神経衰弱
     </div>

      <button id="startBt">Game START</button>

      
      <div id="cardgrid"></div>

      <!-- aタグ　前のページに戻る -->
      <div class="return_page"><a href="#" onclick="history.back(-1);return false;">休憩室に戻る</a></div>
    </main>
  </div>
</div>
</body>

</html>