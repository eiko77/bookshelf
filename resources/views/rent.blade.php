@extends('layouts.app')
@section('content')
<!--bootstrap定形コード-->
<div class="card-body">
    
    <div class="container1">
        <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
        <div class="navbar-brand main_title">みんなの図書室</div>
    </div>
    <!-- ----------------------- -->
    <div class="p-3 mb-2 title_bg1 text-white h5">
        本を借りる
    </div>
    <!-- --------------------- -->
    <!--バリデーションエラー表示用-->
    @include('common.errors')
    <form method="post" action="{{ route('rent.store') }}" class="form-horizontal">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book_id }}">
        <!--借りる人-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name" class="col-sm-3 control-label"> 借りる人の名前</label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <!--貸出日-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="rental_date" class="col-sm-3 control-label">貸出日</label>
                <input type="date" name="rental_date" class="form-control" value="{{ date('Y-m-d') }}">
            </div>
        </div>
        <!--「手続きする」ボタン-->
        <div class="form-row">
            <div class="col-sm-offset-3 col-sm-6">
                <br>
                <button type="submit" class="btn btn-success">
                    借りる
                </button>
            </div>
        </div>
    </form>

    <!-- aタグ　前のページに戻る -->
    <br>
    <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
    @endsection