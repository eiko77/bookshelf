<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\BooksController;
use App\Models\Borrow;
use App\Http\Controllers\BorrowsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// require __DIR__.'/auth.php';

//TOPページ
Route::get('/', function(){
    return view('top');
});
//Gameページ
Route::get('/games', function(){
    return view('games');
})->name('games');

//Game(三目ならべ)
Route::get('/game_sanmoku', function(){
    return view('game_sanmoku');
})->name('game_sanmoku');
//Game(bingo)
Route::get('/game_bingo', function(){
    return view('game_bingo');
})->name('game_bingo');

//Game(クイズ)
Route::get('/game_quiz', function(){
    return view('game_quiz');
})->name('game_quiz');

//Game(クイズ)
Route::get('/nervous', function(){
    return view('game_nervous');
})->name('game_nervous');

//本の一覧表示-------------------------------
//Route::get('/', [BooksController::class,'index']) ;
Route::get('/books', [BooksController::class,'index']) ->name('books');

//登録処理　本を追加--------------------------
Route::post('/books', [BooksController::class,'store'] );

//本を削除------------------------------------
Route::delete('/book/{book}', [BooksController::class,'destroy'] );

//更新----------------------------------------
//{books}でid値を取得
Route::post('/edit/{books}', [BooksController::class,'edit'] );
Route::post('books/update', [BooksController::class,'update'] );

//本の検索---------------------------------------------
//find.blade.php（貸出情報あり）
Route::get('/find', [BooksController::class,'find']) ->name('find') ;
//search.blade.php（貸出情報なし）
Route::get('/search', [BooksController::class,'search'])->name('search') ;

//貸し出し一覧-----------------------　
//貸出簿表示(借りてる人だけ）　borrows.blade.php
Route::get('/borrows', [BorrowsController::class,'index'])->name('borrows.index');
Route::post('/borrows', [BorrowsController::class,'store'] );

//新規処理　貸し出し手続き--------------------------------
Route::get('/rent', [BorrowsController::class,'index']);
Route::get('/books/{book}/rent', [BorrowsController::class,'create'])->name('rent.create');
Route::post('/books/rent', [BorrowsController::class,'store'] )->name('rent.store');

//更新----------------------------------------
//{books}でid値を取得
Route::post('/return/edit/{book}', [BorrowsController::class,'edit'])->name('return.edit');
Route::post('return/{book}', [BorrowsController::class,'update'] )->name('return.update');
Route::get('/return/edit/{book}', [BorrowsController::class,'edit'])->name('return.edit');

//Auth機能は保留
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

