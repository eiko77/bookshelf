<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Book;
use App\Models\Borrow;

class BooksController extends Controller
{
   //本のダッシュボード表示
   public function index()
   {
      $books = Book::orderBy('created_at','desc')->paginate(5);
      return view('books', ['books' => $books]);
   }
   //登録-----------------------------
   public function store(Request $request)
   {
      $validator = $request->validate([
         'title' => 'required|max:255',
         'author' => 'nullable|required',
         'publisher' => 'nullable|required'
      ]);
      //Eloquentモデル(登録処理)
      $books = new Book;
      $books->title = $request->title;
      $books->author = $request->author;
      $books->publisher = $request->publisher;
      $books->save();
      return redirect('/books');
   }
//更新-----------------------------
public function edit(Book $books)
{
   //Book $books id値の１レコード取得
   return view('edit', ['book' => $books]);
}
public function update(Request $request)
   {
      $validator = $request->validate([
         'id' => 'required',
         'title' => 'required|max:255',
         'author' => 'required',
         'publisher' => 'required'
      ]);
      $books = Book::find($request->id);
      $books->title = $request->title;
      $books->author = $request->author;
      $books->publisher = $request->publisher;
      $books->save();
      return redirect('/books');
   } 
   //削除処理
   public function destroy(Book $book)
   {

   // 本に関連する借りた記録を取得
   $borrows = $book->borrows;

    // 借りた記録を一括削除
    foreach ($borrows as $borrow) {
      $borrow->delete();
  }

      //本を削除
      $book->delete();

      return redirect('/books');
   }


   //検索
   public function find(Request $request)
   {
      $keyword = $request['keyword'];
      $books = Book::where('title', 'like', '%' . $keyword . '%')
         //->orwhere('author','like',"%{$keyword}%")
         ->paginate(5);
      return view('find', ['books' => $books]);
   }
   //検索
   public function search(Request $request)
   {
      $keyword = $request['keyword'];
      // $message ='検索結果なし';
      $books = Book::where('title', 'like', '%' . $keyword . '%')
         //->orwhere('author','like',"%{$keyword}%")
         ->paginate(5);
      return view('search', ['books' => $books]);
   }
}
