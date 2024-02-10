<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Borrow extends Model
{
    use HasFactory;
    //$guarded変数に配列を設定した上でprotectedすれば、「id」以外の要素を、createから渡すことができる。ブラックリスト方式は$guarded（保護）を使う。
    protected $guarded =array('id');

    //リレーション_従テーブルとしてbooksとつながる
   public function books(): BelongsTo
   {
       //book_idとの結びつき　第2引数にあえて入れる
       return $this->belongsTo(Book::class,'book_id');       
   }
   public function getBookData(){

    $this->id.
    $this->title.
    $this->author.  
    $this->publisher;
    return;
   } 
}
