<?php

use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert([
            ['post_id' => 1, 'category_id' => 2],
            ['post_id' => 1, 'category_id' => 7],
            ['post_id' => 1, 'category_id' => 16],
            ['post_id' => 2, 'category_id' => 1],
            ['post_id' => 2, 'category_id' => 11],
            ['post_id' => 2, 'category_id' => 16],
            ['post_id' => 3, 'category_id' => 2],
            ['post_id' => 3, 'category_id' => 8],
            ['post_id' => 3, 'category_id' => 16],
            ['post_id' => 4, 'category_id' => 2],
            ['post_id' => 4, 'category_id' => 16],
            ['post_id' => 5, 'category_id' => 5],
            ['post_id' => 5, 'category_id' => 16],
            ['post_id' => 6, 'category_id' => 1],
            ['post_id' => 6, 'category_id' => 10],
            ['post_id' => 6, 'category_id' => 16],
            ['post_id' => 7, 'category_id' => 9],
            ['post_id' => 7, 'category_id' => 16],
            ['post_id' => 8, 'category_id' => 3],
            ['post_id' => 8, 'category_id' => 4],
            ['post_id' => 8, 'category_id' => 16],
            ['post_id' => 9, 'category_id' => 1],
            ['post_id' => 9, 'category_id' => 3],
            ['post_id' => 9, 'category_id' => 16],
            ['post_id' => 10, 'category_id' => 1],
            ['post_id' => 10, 'category_id' => 3],
            ['post_id' => 10, 'category_id' => 16],
            ['post_id' => 11, 'category_id' => 3],
            ['post_id' => 11, 'category_id' => 6],
            ['post_id' => 11, 'category_id' => 7],
            ['post_id' => 11, 'category_id' => 16],
            ['post_id' => 12, 'category_id' => 1],
            ['post_id' => 12, 'category_id' => 11],
            ['post_id' => 12, 'category_id' => 15],
            ['post_id' => 13, 'category_id' => 1],
            ['post_id' => 13, 'category_id' => 2],
            ['post_id' => 13, 'category_id' => 15],
            ['post_id' => 14, 'category_id' => 1],
            ['post_id' => 14, 'category_id' => 11],
            ['post_id' => 14, 'category_id' => 15],
            ['post_id' => 15, 'category_id' => 1],
            ['post_id' => 15, 'category_id' => 2],
            ['post_id' => 15, 'category_id' => 15],
            ['post_id' => 16, 'category_id' => 2],
            ['post_id' => 16, 'category_id' => 10],
            ['post_id' => 16, 'category_id' => 15],
            ['post_id' => 17, 'category_id' => 2],
            ['post_id' => 17, 'category_id' => 6],
            ['post_id' => 17, 'category_id' => 7],
            ['post_id' => 17, 'category_id' => 15],
            ['post_id' => 18, 'category_id' => 11],
            ['post_id' => 18, 'category_id' => 14],
            ['post_id' => 18, 'category_id' => 15],
            ['post_id' => 19, 'category_id' => 3],
            ['post_id' => 19, 'category_id' => 8],
            ['post_id' => 19, 'category_id' => 15],
            ['post_id' => 20, 'category_id' => 4],
            ['post_id' => 20, 'category_id' => 6],
            ['post_id' => 20, 'category_id' => 15]
        ]);
    }
}
