<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        
        DB::table('posts')->insert([
            ['id' => 1, 'user_id' => 1, 'title' => "Red Hot Chili Peppers", 'text' => "世界最強のRockバンド", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'user_id' => 1, 'title' => "ABBA", 'text' => "マンマミーア！", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'user_id' => 1, 'title' => "Eric Clapton", 'text' => "世界三大ギタリスト", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'user_id' => 1, 'title' => "Queen", 'text' => "伝説", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'user_id' => 1, 'title' => "EMINEM", 'text' => "8Mile", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'user_id' => 1, 'title' => "Specials", 'text' => "skaskaska", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'user_id' => 1, 'title' => "Bob Marley", 'text' => "レゲエ界のレジェンド", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'user_id' => 1, 'title' => "The Chainsmokers", 'text' => "グイグイ", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'user_id' => 1, 'title' => "Michael Jackson", 'text' => "Pop界の神様", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'user_id' => 1, 'title' => "Stevie Wonder", 'text' => "最高", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'user_id' => 1, 'title' => "Jamiroquai", 'text' => "Funk is cool", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 12, 'user_id' => 1, 'title' => "Mr.Children", 'text' => "日本最強のバンド", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 13, 'user_id' => 1, 'title' => "サザンオールスターズ", 'text' => "日本一", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 14, 'user_id' => 1, 'title' => "あいみょん", 'text' => "イケイケ", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 15, 'user_id' => 1, 'title' => "JUDY AND MARY", 'text' => "レジェンドバンド", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 16, 'user_id' => 1, 'title' => "東京スカパラダイスオーケストラ", 'text' => "世界で活躍!!", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 17, 'user_id' => 1, 'title' => "Dachambo", 'text' => "フェス好きにはたまらない", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 18, 'user_id' => 1, 'title' => "DEPAPEPE", 'text' => "アコースティックデュオ", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 19, 'user_id' => 1, 'title' => "久保田利伸", 'text' => "日本R&B界最強", 'created_at' => $now, 'updated_at' => $now],
            ['id' => 20, 'user_id' => 1, 'title' => "Perfume", 'text' => "Very Cool!!", 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
