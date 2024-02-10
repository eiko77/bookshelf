@extends('layouts.app')
@section('content')
<div class="card-body">
    <div><a href="/"><img src="{{ url('img/logo.png') }}" class="logo">
            <!--<img class="card-img-top w-10" src="../img/book_aws.jpeg" alt="book image">-->
        </a></div>
    <!-- ----------------------- -->
    <div class="p-3 mb-2 title_bg1 text-white h5">
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
                            <!--「手続きする」ボタン-->
                            <div class="form-row mt-4 md-4">
                                <div class="col-sm-offset-3 col-sm-6 tm-5">
                                    <button type="submit" class="btn btn-success" onclick="location.href='/find'">
                                        返却
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>

    <!-- aタグ　前のページに戻る -->
    <br>
    <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
</div>
@endsection