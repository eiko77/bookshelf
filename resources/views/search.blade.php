@extends('layouts.app')
@section('content')
    <div class="card-body">
        <div><a href="/"><img src="{{ url('img/logo.png') }}" class="logo">
            <!--<img class="card-img-top w-10" src="../img/book_aws.jpeg" alt="book image">-->         
         </a></div>
        <div class="p-3 mb-2 title_bg1 text-white h5">
            本を探す
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
    <!-- 検索機能ここから ここまで　"card-body" -->
    <br>
    <!--該当の本があるとき-->
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!--tableヘッダー-->
                    <thead>
                        <th>検索結果</th>
                        <th>&nbsp;</th>
                    </thead>
                      <!--Test if else 本が見当たらない-->
                      @if ($books->isEmpty())
                      <p>{{$message}}</p> 
                      @else
                      <!--Test if else 本が見当たらない-->
                    <tbody>
                        @foreach ($books as $book)               
                         <tr>
                                <!--本タイトル-->
                                <td class="table-text container">
                                    <div class="list_book1">{{ $book->title }}</div>
                                    <div class="list_book2">{{ $book->author }}</div>
                                    <div class="list_book2">{{ $book->publisher }}</div>               
                                </td>
                          </tr>
                        @endforeach       
                    </tbody>
                    @endif
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
