@extends('layouts.app')
@section('content')

<div class="card-body">
    <div class="container1">
        <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
        <div class="navbar-brand main_title">みんなの図書室</div>
    </div>

    <div class="p-3 mb-2 bg-success text-white h5">
        本の貸出し状況
    </div>
    <!--バリデーションエラー表示用-->
    @include('common.errors')
</div>
<br>
<!--Book　本のリスト-->
<div class="card-body">
    <div class="card-body">
        <table class="table table-striped task-table">
            <!--tableヘッダー-->
            <thead class="memo1">
                <th>【貸出日　降順】</th>
                <th>&nbsp;</th>
            </thead>
            <!--本と貸し出し情報合体一覧-->
            <tbody>
                <tr>
                    <th class="table-text container">
                        <div class="list_book3 text-left">名前</div>
                        <div class="list_book3 text-left">貸出日</div>
                        <div class="list_book3 text-left">返却日</div>
                        <div class="list_book3 text-left">本の情報</div>
                    </th>
                    @foreach ($items as $item)
                <tr>
                    <!--本情報-->
                    <td class="table-text container">
                        <!--貸し出し情報-->
                        <div class="list_book2">{{ $item->name }}</div>
                        <div class="list_book2">{{ $item->rental_date }}</div>
                        <div class="list_book2">{{ $item->return_date }}</div>
                        <div class="list_book1">{{ $item->books->title }}</div>
                        <div class="list_book2">{{ $item->books->author }}</div>
                        <div class="list_book2">{{ $item->books->publisher }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- aタグ　前のページに戻る -->
        <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
    </div>
</div>

@endsection