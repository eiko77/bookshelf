@extends('layouts.app')
@section('content')
    <div class="card-body">

        <div class="container1">
            <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
            <div class="navbar-brand main_title">みんなの図書室</div>
        </div>

        <div class="p-3 mb-2 title_bg1 text-white h5">
            本を探す
        </div>
        <!--バリデーションエラー表示用-->
        @include('common.errors')
        <!-- 検索機能ここから -->
        <div>
            <form action="{{ url('search') }}" method="GET">
                {{-- @csrf --}}
                <input type="text" name="keyword">
                <input type="submit" value="検索">
            </form>
        </div>
    </div>
    <!-- 検索機能ここから ここまで　"card-body" -->
    <br>
    <!--該当の本があるとき-->
   
@endsection
