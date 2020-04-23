<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'さんぷる',
            'email' => 'sample@example.com',
            'password' => bcrypt('password')
            ],
            [
            'name' => '名無しさん',
            'email' => 'sample2@example.com',
            'password' => bcrypt('password')
            ]
        ]);
    }
}
