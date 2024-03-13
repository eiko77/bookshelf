@extends('layouts.app')
@section('content')
<div class="card-body">
        <div class="container1">
            <div><a href="#" onclick="history.back(-1);return false;"><img src="{{ url('img/logo.png') }}" class="logo">
                </a></div>

            <div class="navbar-brand main_title">みんなの図書室</div>
        </div>
        <div class="p-3 mb-2 bg-success text-white h5">
            本を探す
        </div>
        <div class="card-body">
        <!--バリデーションエラー表示用-->
        @include('common.errors')
   
    <!-- 検索機能ここから -->
   
            <div>
                <form action="{{ url('search') }}" method="GET">
                    {{-- GETなので@csrfは不要_tokenが表示されてしまう --}}
                    <input type="text" name="keyword">
                    <input type="submit" value="検索">
                </form>
            </div>
    

        <!-- 検索機能ここから ここまで　"card-body" -->
        <br>
        <!--該当の本があるとき-->
        @if (count($books) > 0)
            <table class="table table-striped task-table">
                <!--tableヘッダー-->
                <thead>
                    <th>検索結果</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <!--本タイトル-->
                            <td class="table-text container1">
                                <div class="list_book">{{ $book->title }}</div>
                                <div class="list_book">{{ $book->author }}</div>
                                <div class="list_book">{{ $book->publisher }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
          @endif
        </table>
    
    <!--ページネーション-->
    <div class="row">
        <div class="col-md-4 offset-md-4">
            {{ $books->links('pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
