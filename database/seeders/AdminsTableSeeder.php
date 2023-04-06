<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $faker = Faker::create('ja_JP');

        $category = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

        $personality = ['建築家','論理学者','指揮官','討論者','提唱者','仲介者','主唱者','広報運動家',
        '管理者','擁護者','幹部','領事館','巨匠','冒険家','起業家','エンターテイナー'];
       
      $personalitiesValue = $faker->randomElement($personality );
       
        $license = ['ICF認定資格','日本コーチ連盟認定プロフェッショナル・コーチ','(一財)生涯学習開発財団認定コーチ'];

        $career = '大学卒業後、大手外食産業へ（現東証一部）。40歳のタイミングで人事コンサルタントとして独立開業し、以下のクライアントの問題解決に奔走。';
        
        for ($i = 0; $i < 30; $i++) {
            DB::table('admins')->insert([
                'category_id' => $faker->randomElement($category),
                'name' => $faker->name(),
                'personalities' => $personalitiesValue,
                'license' => $faker->randomElement($license),
                'career' => $faker->text(),
                'url' => 'https://aitemasu.me/',
                'password' => $faker->password(),
            ]);
        }
    }
}