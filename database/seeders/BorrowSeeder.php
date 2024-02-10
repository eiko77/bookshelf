<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $param = [
            'book_id' => '3',
            'name' => '奈良 鹿子',
            'rental_date' => '2024-01-07 08:14:25',
            'return_date' => '2024-01-08 08:30:25',
            'created_at' => '2024-01-07 08:14:25',
            'updated_at' => '2024-01-07 08:14:25',
        ];
        DB::table('borrows')->insert($param); 
        
        $param = [
            'book_id' => '2',
            'name' => '静岡 茶子',
            'rental_date' => '2024-01-12 08:14:25',
            'return_date' => '2024-01-14 08:30:25',
            'created_at' => '2024-01-12 08:14:25',
            'updated_at' => '2024-01-12 08:14:25',
        ];
        DB::table('borrows')->insert($param); 
    }
}
