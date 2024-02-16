@extends('layouts.app')
@section('content')

    <div class="container1">
        <div><img src="{{ url('img/logo.png') }}" class="logo"> </div>
        <div class="navbar-brand main_title">みんなの図書室</div>
    </div>
    
    <div class="p-3 mb-2 title_bg1 text-white h5">
        本を借りる・返す
    </div>
    <!--バリデーションエラー表示用-->
    @include('common.errors')
    <!-- 検索機能ここから -->
    <div>
        <form action="{{ url('find') }}" method="GET">
            @csrf
            <input type="text" name="keyword">
            <input type="submit" value="検索">
        </form>
    </div>
    </div>
    <!--本の一覧-->
    <br>
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>検索結果</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td class="table-text container">
                                    <div class="list_book1">{{ $book->title }}</div>
                                    <div class="list_book2">{{ $book->author }}</div>
                                    <div class="list_book2">{{ $book->publisher }}</div>
                                    <!-- rental_dateが存在、かつ return_dateが存在しない場合は
                          「 貸出」「返却」ボタン表示-->
                                    <div>
                                        @if ($book->borrows->where('return_date', null)->count() === 0)
                                            <form action="{{ route('rent.create', ['book' => $book->id]) }}" method="GET">
                                                @csrf
                                                <!-- 借りるボタン -->
                                                <button type="submit" class="btn btn-outline-success m-3">
                                                    借りる
                                                </button>
                                            </form>
                                        @else
                                            <!-- 貸出ボタン＿無効 -->
                                            <div class="row">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-secondary m-3 disabled">
                                                        貸出
                                                    </button>
                                                </div>
                                                <!-- 返すボタン＿更新 -->
                                                <div class="col">
                                                    <!-- 重要_本と貸し出し情報の結びつき -->
                                                    <form
                                                        action="{{ url('/return/edit/' . $book->borrows->whereNull('return_date')->first()->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-success m-3"
                                                            onclick="location.href='/find'">
                                                            返却
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--ページネーション test-->
        <div class="row">
            <div class="col-md-4 offset-md-4">
                {{ $books->links('pagination.bootstrap-4') }}
            </div>
        </div>
    @endif
@endsection
