<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'title' => 'PHPフレームワーク Laravel入門 第2版',
            'author' => '掌田津耶乃',
            'publisher' => '秀和システム',
            'created_at' => "2023-05-23 05:14:25",
            'updated_at' => "2023-05-23 05:14:25",
       
        ];
        DB::table('books')->insert($param); 

        $param = [
            'title' => '動かして学ぶ! Laravel開発入門',
            'author' => '山崎 大助',
            'publisher' => '翔泳社',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '徹底攻略Java SE Bronze問題集[1Z0-818]対応',
            'author' => '志賀 澄人',
            'publisher' => '株式会社ソキウス・ジャパン',
            'created_at' => "2023-07-19 05:14:25",
            'updated_at' => "2023-07-19 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '徹底攻略 Java SE 8 Silver 問題集[1Z0-808]対応',
            'author' => '志賀 澄人',
            'publisher' => '株式会社ソキウス・ジャパン',
            'created_at' => "2023-09-10 05:10:25",
            'updated_at' => "2023-09-10 05:10:25",
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'PHPフレームワーク Laravel実践開発',
            'author' => '掌田津耶乃',
            'publisher' => '秀和システム',
            'created_at' => "2023-12-10 12:10:22",
            'updated_at' => "2023-12-10 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Vue.js3 超入門',
            'author' => '掌田津耶乃',
            'publisher' => '秀和システム',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'AWS運用入門 押さえておきたいAWSの基本と運用ノウハウ',
            'author' => '佐竹 陽一 / 山﨑 翔平',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'キタミ式イラストIT塾 応用情報技術者 令和06年 (情報処理技術者試験) ',
            'author' => 'きたみ りゅうじ',
            'publisher' => '技術評論社',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'キタミ式イラストIT塾 基本情報技術者 令和06年 (情報処理技術者試験) ',
            'author' => 'きたみ りゅうじ',
            'publisher' => '技術評論社',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '令和06年 基本情報技術者 パーフェクトラーニング過去問題集 ',
            'author' => '山本 三雄',
            'publisher' => '技術評論社',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '2023-2024　基本情報技術者　科目Bの重点対策 ',
            'author' => '富田　良治',
            'publisher' => 'アイテック',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '【令和５年度】 いちばんやさしい 基本情報技術者　絶対合格の教科書＋出る順問題集 ',
            'author' => '高橋 京介',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '【令和５年度】 いちばんやさしい ITパスポート　絶対合格の教科書＋出る順問題集 ',
            'author' => '高橋 京介',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '基本情報技術者【科目B】ゼロからわかるアルゴリズムと擬似言語',
            'author' => 'イエローテールコンピュータ',
            'publisher' => '技術評論社',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '1冊ですべて身につくHTML & CSSとWebデザイン入門講座',
            'author' => 'Mana',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'ほんの一手間で劇的に変わるHTML & CSSとWebデザイン実践講座 ',
            'author' => 'Mana',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '確かな力が身につくJavaScript「超」入門 第2版',
            'author' => '狩野 祐東',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Webクリエイター能力認定試験HTML5対応エキスパート公式テキスト―サーティファイWeb利用・技術認定委員会公認',
            'author' => '狩野 祐東',
            'publisher' => 'FOM出版',
            'created_at' => "2023-12-29 12:10:22",
            'updated_at' => "2023-12-29 12:10:22",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '情報処理教科書 出るとこだけ！基本情報技術者［科目B］第4版',
            'author' => '橋本 祐史',
            'publisher' => '翔泳社',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'スッキリわかるJava入門 第3版 スッキリわかるシリーズ',
            'author' => '中山 清喬 / 国本大悟 ',
            'publisher' => 'インプレス',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'スッキリわかるSQL入門 第3版 ドリル256問付き!',
            'author' => '中山 清喬 / 飯田 理恵子他 ',
            'publisher' => 'インプレス',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Access 2019 応用 (よくわかる)',
            'author' => 'FOM出版 ',
            'publisher' => 'FOM出版',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Excel VBA 本格入門',
            'author' => '大村 あつし ',
            'publisher' => '技術評論社',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Photoshop しっかり入門',
            'author' => 'まきのゆみ',
            'publisher' => 'SBクリエイティブ',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '最短突破 LinuCレベル1 バージョン10.0 合格教本',
            'author' => '河原木 忠司',
            'publisher' => '技術評論社',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Laravelの教科書 バージョン10対応',
            'author' => '加藤 じゅんこ',
            'publisher' => 'ソシム',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Laravelの教科書 バージョン10対応',
            'author' => '加藤 じゅんこ',
            'publisher' => 'ソシム ',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'PHP7＋MariaDB／MySQLマスターブック',
            'author' => '永田 順伸',
            'publisher' => 'マイナビ出版',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'ゼロからわかる Amazon Web Services超入門 はじめてのクラウド',
            'author' => '大澤文孝',
            'publisher' => '技術評論社',
            'created_at' => "2023-06-23 05:14:25",
            'updated_at' => "2023-06-23 05:14:25",
        ];
        DB::table('books')->insert($param);

    }
}