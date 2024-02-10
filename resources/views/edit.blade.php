@extends('layouts.app')
@section ('content')
<div class="row container">
    <h4>本の情報　更新フォーム</h4>
    <div class="col-md-12">
        @include('common.errors')
        <form action="{{ url('books/update') }}" method="POST">
            @csrf
            <!--本のタイトル　title-->
            <div class="form-group">
                <label for="title">本のタイトル</label>
                <input type="text" name="title" class="form-control" value="{{$book->title}}">
            </div>
            <!--著者　author-->
            <div class="form-group">
                <label for="author">著者</label>
                <input type="text" name="author" class="form-control" value="{{$book->author}}">
            </div>
            <!--出版社　publisher-->
            <div class="form-group">
                <label for="publisher">出版社</label>
                <input type="text" name="publisher" class="form-control" value="{{$book->publisher}}">
            </div>
            <br>
            <!--Save/Backボタン-->
            <div class="well well-sm">
                <button type="submit" class="btn btn-success">本の情報を更新</button>
                <a class="btn btn-link pull-right" href="{{url('/')}}">
                    戻る</a>
            </div>
            <!--id値を送信-->
            <input type="hidden" name="id" value="{{$book->id}}">
            @csrf
        </form>
    </div>
</div>
@endsection