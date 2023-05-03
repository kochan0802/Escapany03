<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCharacter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_characters')->delete();

    DB::table('categories')->insert([
      ['category_id' => '1', 'category_name' => 'やりたいこと探し'],
      ['category_id' => '2', 'category_name' => '起業'],
      ['category_id' => '3', 'category_name' => '副業'],
      ['category_id' => '4', 'category_name' => '資格取得'],
      ['category_id' => '5', 'category_name' => 'パラレルワーク'],
      ['category_id' => '6', 'category_name' => 'クリエイター'],
      ['category_id' => '7', 'category_name' => '自分に合った働き方'],
      ['category_id' => '8', 'category_name' => '趣味'],
      ['category_id' => '9', 'category_name' => '海外移住'],
      ['category_id' => '10', 'category_name' => 'その他'],
    ]);
    }
}
