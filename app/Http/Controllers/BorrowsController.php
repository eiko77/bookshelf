<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\BooksController;
use App\Models\Borrow;

class BorrowsController extends Controller
{
   //本と貸し出しデータ表示
   public function index(Request $request)
   {
      $items = Borrow::orderBy('rental_date', 'desc')->get();
      dd($items);
      return view('/borrows', ['items' => $items]);
   }
   //登録(貸出)--------------------------
   public function create($book_id)
   {
      // 本の借りる画面を表示
      return view('/rent', ['book_id' => $book_id]);
   }
   public function store(Request $request)
   {
      $validator = $request->validate([
         'name' => 'required',
         'rental_date' => 'required',
      ]);
      //Eloquentモデル(登録処理)
      $borrows = new Borrow;
      $borrows->book_id = $request->book_id;
      $borrows->name = $request->name;
      $borrows->rental_date = $request->rental_date;
      $borrows->return_date = $request->return_date;
      $borrows->save();
      // 成功したら適切なページにリダイレクト
      return redirect('/find')->with('success', '本を借りました！');
   }
   // 返却------------------------------------
   public function edit(Request $request, $book)
   {
      $borrows = Borrow::find($book);
      return view('return', ['borrows' => $borrows]);
   }
   // 返却日＿更新
   public function update(Request $request)
   {
      $validator = $request->validate([
         'return_date' => 'required'
      ]);
      //findOrFail()：エラー（404HTTPレスポンス）を返す/例外処理。find()はnullを返す/原因がわかりづらい
      $borrow = Borrow::findOrFail($request->borrow_id);
      // 返却日を更新
      $borrow->return_date = $request->return_date;
      $borrow->save();
      // 適切なリダイレクト先にリダイレクト
      return redirect('/find')->with('success', '本を返却しました！');
   }
}
