<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    //リレーション_主テーブルとしてborrowsとつながる
   public function borrows(): HasMany
   {
     //borrows 全データ取得
       return $this->hasMany(Borrow::class);
   }

   public function getBorrowData(){
    return
    $this->id.
    $this->book_id.
    $this->name.  
    $this->rental_date.
    $this->return_date;
}
}