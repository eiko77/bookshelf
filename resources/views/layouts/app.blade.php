<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

</head>
<style>
    body {
        color: rgb(88, 86, 86);
    }

    .logo {
        width: 150px;
    }

    .main_title {
            margin-left: 2rem
        }

    thead {
        color: rgb(88, 86, 86);
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
    .container4{
        display: flex;
        justify-content: flex-end;
        text-align: right;
    }

    .list_book {
        width: 30rem;
        margin-top: 1rem;
    }

    .list_book3 {
        width: 10%;
        color: green;
    }

    .title_bg1 {
        background-color: #ABCCA3;
    }

    .box2 {
        height: 300px;
    }

    .card-title {
        width: 180px;
        text-align: under;
    }

    .button_f {
        margin-top: 1rem;
        /* margin-left: 1.5rem; */
        width: 7rem;
    }

    .btn-sub {
        background-color: #abcca3;
        color: white;
    }

    .page-link {
        color: rgb(99, 97, 97);
    }

    .page-item.active .page-link {
        background-color: #abcca3;
        border: #abcca3;
    }

    .form-control {
        width: 25rem;
    }

    .return_page_msg {
        text-align: right;
    }

    .text-left {
        color: green;
    }

    .rentalstatus{
        margin: 1% 0 3% 0;
    }
    hr{
            height: 6px;
            width: 90vw;
        } 
    h6{
        margin-bottom: 1rem;
        color: gray;
    }

    .books_blade{
        width: 90vw
    }
</style>

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
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
