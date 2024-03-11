@extends('layouts.app')
@section('content')
    <div class="card-body">
        <div class="container1">
            <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo">
            </a></div>

            <div class="navbar-brand main_title">みんなの図書室</div>
        </div>

        <div class="p-3 mb-2 bg-success text-white h5">
            本を借りる・返す
        </div>
        <!--バリデーションエラー表示用-->
        @include('common.errors')
        <!-- 検索機能ここから -->
        <div>
            <form action="{{ url('find') }}" method="GET">
                {{-- GETなので@csrfは不要_tokenが表示されてしまう --}}
                <input type="text" name="keyword">
                <input type="submit" value="検索">
            </form>
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
                                <td class="table-text container1">
                                    <div class="form-row">
                                        <div class="list_book">{{ $book->title }}</div>
                                        <div class="list_book">{{ $book->author }}</div>
                                        <div class="list_book">{{ $book->publisher }}</div>
                                    </div>
                                        <!-- rental_dateが存在、かつ return_dateが存在しない場合は
                                  「 貸出」「返却」ボタン表示-->
                                      
                                            {{-- <div class="row"> --}}
                                  
                                                <!-- 借りるボタン -->
                                                    @if ($book->borrows->where('return_date', null)->count() === 0)
                                                    <div class="button_f">
                                                        <form action="{{ route('rent.create', ['book' => $book->id]) }}"
                                                            method="GET">
                                                            <button type="submit" class="btn btn-outline-success m-3">
                                                                借りる
                                                            </button>
                                                        </form>
                                                </div>
                                          
                                            <!-- ここまで借りるボタン -->
                                        @else
                                            <!-- 貸出ボタン -->
                                            <div class="button_f">
                                                <button type="submit" class="btn btn-secondary m-3 disabled">
                                                    貸出
                                                </button>
                                            </div>
                                            <!-- ここまで貸出ボタン -->
                                            <!-- 返すボタン＿更新 -->
                                         <div class="button_f">
                                                <form
                                                    action="{{ url('/return/edit/' . $book->borrows->whereNull('return_date')->first()->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success m-3"
                                                        onclick="location.href='/find'">
                                                        返却
                                                    </button>
                                                </form>
                                            </div>
                                            <!-- ここまで　返すボタン＿更新 -->
                                        </div>
                                    </div>
                        @endif
                    </div>
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
            {{ $books->links('pagination.bootstrap-5') }}
        </div>
    </div>
    @endif
@endsection
