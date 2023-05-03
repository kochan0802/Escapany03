<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachCharacter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coach_characters')->delete();

    DB::table('categories')->insert([
      ['id' => '1', 'category_name' => 'やりたいこと探し'],
      ['id' => '2', 'category_name' => '起業'],
      ['id' => '3', 'category_name' => '副業'],
      ['id' => '4', 'category_name' => '資格取得'],
      ['id' => '5', 'category_name' => 'パラレルワーク'],
      ['id' => '6', 'category_name' => 'クリエイター'],
      ['id' => '7', 'category_name' => '自分に合った働き方'],
      ['id' => '8', 'category_name' => '趣味'],
      ['id' => '9', 'category_name' => '海外移住'],
      ['id' => '10', 'category_name' => 'その他'],
      ['id' => '10', 'category_name' => 'その他'],
      ['id' => '11', 'category_name' => 'その他'],
      ['id' => '13', 'category_name' => 'その他'],
    ]);

    }
}
