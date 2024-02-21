@extends('layouts.app')
@section('content')
<!--bootstrap定形コード使用-->
<div class="card-body">
    <div class="container1">
        <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
        <div class="navbar-brand main_title">みんなの図書室</div>
    </div>

    <!--バリデーションエラー表示用-->
    @include('common.errors')
    <!-- -------------------------------------------- -->
    <div class="p-3 mb-2 bg-success text-white h5">
        本の管理（本の登録・更新（訂正）・削除）
    </div>
    <!-- -------------------------------------------- -->
    <!--バリデーションエラー表示用-->
    @include('common.errors')
    <!--本の登録フォーム-->
    <form action="{{ url('books') }}" method="POST" class="form-horizontal">
        @csrf
        <!--本のタイトル-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title" class="col-sm-3 control-label"> 本のタイトル</label>
                <input type="text" name="title" class="form-control">
            </div>
        </div>
        <!--本の著者-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="author" class="col-sm-3 control-label">著者</label>
                <input type="text" name="author" class="form-control">
            </div>
        </div>
        <!--本の出版社-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="publisher" class="col-sm-3 control-label">出版社</label>
                <input type="text" name="publisher" class="form-control">
            </div>
        </div>
        <!-- -------------------------------------------- -->
        <!--本の登録ボタン-->
        <br>
        <div class="form-row">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-outline-success">
                    本を登録
                </button>
            </div>
        </div>
    </form>
    <!-- -------------------------------------------- -->
    <!--「貸し出し状況の確認」ボタン-->
    <br>
    <button type="submit" class="btn btn-outline-secondary text-right" onclick="location.href='/borrows'">
        貸出し状況の確認　</button>
</div>
<!-- -------------------------------------------- -->
<!--既に登録されている本のリスト-->
@if (count($books) > 0)
<div class="card-body">
    <div class="card-body">
        <table class="table table-striped task-table">
            <!--tableヘッダー-->
            <thead>
                <th>本の一覧</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </thead>
            <!--table本体-->
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <!--本タイトル-->
                    <td class="table-text container">
                        <div class="list_book1">{{ $book->title }}</div>
                        <div class="list_book2">{{ $book->author }}</div>
                        <div class="list_book2">{{ $book->publisher }}</div>

                        <!--本　更新ボタン-->
                        <div class="button_f">
                            <form action="{{ url('edit/' . $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary" onclick="location.href='/books'">
                                    更新
                                </button>
                            </form>
                        </div>

                        <!--本　削除ボタン-->
                        <div class="button_f">
                            <form action="{{ url('book/' . $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    削除
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!--ページネーション設定-->
<div class="row">
    <div class="col-md-4 offset-md-4">
        <!--linksメソッド_引数にテンプレートを貼る-->
        {{ $books->links('pagination.bootstrap-5') }}
    </div>
</div>
<!--ページネーション 設定ここまで-->
@endif
@endsection