<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => "1", 'name' => "Pop"],
            ['id' => "2", 'name' => "Rock"],
            ['id' => "3", 'name' => "R&B"],
            ['id' => "4", 'name' => "EDM"],
            ['id' => "5", 'name' => "Hip Hop"],
            ['id' => "6", 'name' => "Electro Pop"],
            ['id' => "7", 'name' => "Funk"],
            ['id' => "8", 'name' => "Blues"],
            ['id' => "9", 'name' => "Reggae"],
            ['id' => "10", 'name' => "Ska"],
            ['id' => "11", 'name' => "Folk"],
            ['id' => "12", 'name' => "Metal"],
            ['id' => "13", 'name' => "Classic"],
            ['id' => "14", 'name' => "New Age"],
            ['id' => "15", 'name' => "邦楽"],
            ['id' => "16", 'name' => "洋楽"]
        ]);
    }
}
