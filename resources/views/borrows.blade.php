@extends('layouts.app')
@section('content')
    <div class="card-body">
        <div class="container1">
            <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo">
        </a></div>
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
            <table class="table table-striped task-table">
                <!--tableヘッダー-->
                <thead class="memo1">
                    <th>【貸出日　降順】</th>
                    <th>&nbsp;</th>
                </thead>
                <!--本と貸し出し情報合体一覧-->
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <!--本情報-->
                            <td class="table-text ">
                                <!--貸し出し情報-->
                                <div class="list_book">{{ $item->books->title }}</div>
                                <div class="list_book">本を借りた人：{{ $item->name }}</div>
                                <div class="list_book">貸出日：{{ $item->rental_date }}</div>
                                <div class="">返却日：{{ $item->return_date }}</div>
                              
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- 前のページに戻る -->
        <br>
        <div class="pageback">
            <a href="#" onclick="history.back(-1);return false;">前のページに戻る</a>
        </div>
    </div>
@endsection
