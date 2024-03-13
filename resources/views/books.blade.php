@extends('layouts.app')
@section('content')

<div class="card-body">
    <div class="container1">
        <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo">
            </a></div>

        <div class="navbar-brand main_title">みんなの図書室（管理用）</div>
    </div>
    <div class="p-3 mb-2 bg-success text-white h5">
        本の管理（貸出状況確認/本の登録）
    </div>
        <div class="card-body books_blade">
            <!--「貸出状況の確認」ボタン-->
            <br>
            <h6>貸出し状況の確認</h6>
            <div class="rentalstatus">
                <a href="{{ route('borrows') }}">
                    <button class="btn btn-secondary ">
                        貸出し状況の確認　/　過去の貸し出し</button>
                </a>
            </div>
            <!--横線-->
            <hr>
            <!-- ------------------------------ -->
            <h6>新しい本の登録</h6>
            <!--バリデーションエラー表示用-->
            @include('common.errors')
            <!--本の登録フォーム-->
            <form action="{{ url('books') }}" method="POST" class="form-horizontal">
                @csrf
                <!--本のタイトル-->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title" class="col-sm-3 control-label"> 本のタイトル</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                </div>
                <!--本の著者-->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="author" class="col-sm-3 control-label">著者</label>
                        <input type="text" name="author" value="{{ old('author') }}" class="form-control">
                    </div>
                </div>
                <!--本の出版社-->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="publisher" class="col-sm-3 control-label">出版社</label>
                        <input type="text" name="publisher" class="form-control">
                    </div>
                    <!--本の登録ボタン-->
                    <br>
                    <div class="form-row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-sub">
                                本を登録
                            </button>
                        </div>
                    </div>
            </form>
        </div>
        <!--横線-->
        <hr>
        <!-- ------------------------------ -->

        <!--既に登録されている本のリスト-->
        @if (count($books) > 0)
            <br>
            <h6>本の登録訂正・削除</h6>
            <table class="table table-striped task-table">
                <!--tableヘッダー-->
                <thead>
                    <th>本棚一覧</th>
                    <th>&nbsp;</th>
                </thead>
                <!--table本体-->
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <!--本タイトル-->

                            <td class="table-text container1">
                                <div class="form-row">

                                    <div class="col-6">
                                        <div class="list_book">{{ $book->title }}</div>
                                        <div class="list_book">{{ $book->author }}</div>
                                        <div class="list_book">{{ $book->publisher }}</div>
                                    </div>
                                    <div class="container4">
                                        <!--本　更新ボタン-->
                                        <div class="col-3">
                                            {{-- <div class="button_f"> --}}
                                            <form action="{{ url('edit/' . $book->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-secondary"
                                                    onclick="location.href='/books'">
                                                    更新
                                                </button>
                                            </form>
                                        </div>
                                        <!--本　削除ボタン-->
                                        {{-- <div class="button_f"> --}}
                                        <div class="col-3">
                                            <form action="{{ url('book/' . $book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="deletePost(this)">
                                                    削除
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                {{-- 削除時に最終確認メッセージ ※コンフォーム --}}
                                <script>
                                    function deletePost(e) {
                                        'use strict'
                                        if (confirm('本当にこの本を削除しますか？本の削除する場合、参照整合性をとるためにこの本を過去に借りた履歴も同時に削除します。')) {
                                            document.getElementById('delete_' + e.dataset.id).submit()
                                        }
                                    }
                                </script>
                                {{-- ここまで削除時に最終確認メッセージ --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!--ページネーション-->
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    {{ $books->links('pagination.bootstrap-5') }}
                </div>
            </div>
            <!--ページネーション 設定ここまで-->
        @endif
    </div>
    </div>
@endsection
