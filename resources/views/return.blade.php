@extends('layouts.app')
@section('content')
    <div class="card-body">
        <div class="container1">
            <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
            <div class="navbar-brand main_title">みんなの図書室</div>
        </div>
        <!-- ----------------------- -->
        <div class="p-3 mb-2 bg-success text-white h5">
            本を返す
        </div>
        <!-- --------------------- -->
        <!-- バリデーションエラー表示用 -->
        @include('common.errors')
        <form action="{{ url('return/edit') }}" method="POST" class="form-horizontal">
            @csrf
            {{-- {{ dd($borrows) }} --}}
            <!--本の情報表示-->
            <input type="hidden" name="borrow_id" value="{{ $borrows->id }}">
            <div class="card">
                <div class="container">
                    <label for="name" class="col-sm-3 control-label"> 借りている本</label>
                    <div class="card-body">
                        <div>{{ $borrows->books->title }}</div>
                        <div>{{ $borrows->books->author }}</div>
                        <div>{{ $borrows->books->publisher }}</div>
                    </div>
                </div>
                <!--貸出情報表示-->
                <div class="card">
                    <div class="container">
                        <label for="name" class="col-sm-3 control-label"> 借りている方の情報</label>
                        <div class="card-body">
                            <div>お名前 : {{ $borrows->name }}</div>
                            <div>貸出日 : {{ $borrows->rental_date }}</div>
                            <!--返却日-->
                            <br>
                            <div class="form-group col-md-6">
                                <label for="return_date" class="col-sm-3 control-label">返却日 : </label>
                                <input type="date" name="return_date" class="form-control" value="{{ date('Y-m-d') }}">

                                <div style="color: green">※返却日には本を借りた日の翌日以降の日付を指定してください。</div>
                                <!--「手続きする」ボタン-->
                                <div class="form-row mt-4 md-4">
                                    <div class="col-sm-offset-3 col-sm-6 tm-5">
                                        <button type="submit" class="btn btn-sub" onclick="location.href='/find'">
                                            返却
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- aタグ　前のページに戻る -->
        <br>
        <div class="pageback">
            <a href="#" onclick="history.back(-1);return false;">キャンセルして戻る</a>
        </div>
    </div> 
    </form>
    </div>
@endsection
