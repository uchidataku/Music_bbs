<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        
        DB::table('responses')->insert([
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 1, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 2, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 3, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 3, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 3, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 3, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 4, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 4, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 4, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 4, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 5, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 5, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 5, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 5, 'user_id' => 1, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now],
            ['post_id' => 5, 'user_id' => 2, 'text' => "サンプルなレスポンスサンプルなレスポンスサンプルなレスポンスサンプルなレスポンス", 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
