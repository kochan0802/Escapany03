<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Characters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('characters')->delete();

    DB::table('characters')->insert([
      ['id' => '1', 'user_personalities' => '建築家', 'admin_personalities' => '領事官','score' => '4'],
      ['id' => '2', 'user_personalities' => '建築家', 'admin_personalities' => '建築家','score' => '3'],
      ['id' => '3', 'user_personalities' => '建築家', 'admin_personalities' => '冒険家','score' => '2'],
      ['id' => '4', 'user_personalities' => '建築家', 'admin_personalities' => '討論者','score' => '1'],
      ['id' => '5', 'user_personalities' => '論理学者', 'admin_personalities' => 'エンターテイナー','score' => '4'],
      ['id' => '6', 'user_personalities' => '論理学者', 'admin_personalities' => '論理学者','score' => '3'],
      ['id' => '7', 'user_personalities' => '論理学者', 'admin_personalities' => '擁護者','score' => '2'],
      ['id' => '8', 'user_personalities' => '論理学者', 'admin_personalities' => '指揮官','score' => '1'],
      ['id' => '9', 'user_personalities' => '指揮官', 'admin_personalities' => '擁護者','score' => '4'],
      ['id' => '10', 'user_personalities' => '指揮官', 'admin_personalities' => '指揮官','score' => '3'],
      ['id' => '11', 'user_personalities' => '指揮官', 'admin_personalities' => 'エンターテイナー','score' => '2'],
      ['id' => '12', 'user_personalities' => '指揮官', 'admin_personalities' => '論理学者','score' => '1'],
      ['id' => '13', 'user_personalities' => '討論者', 'admin_personalities' => '冒険家','score' => '4'],
      ['id' => '14', 'user_personalities' => '討論者', 'admin_personalities' => '討論者','score' => '3'],
      ['id' => '15', 'user_personalities' => '討論者', 'admin_personalities' => '領事官','score' => '2'],  
      ['id' => '16', 'user_personalities' => '討論者', 'admin_personalities' => '建築家','score' => '1'],
      ['id' => '17', 'user_personalities' => '提唱者', 'admin_personalities' => '幹部','score' => '4'],
      ['id' => '18', 'user_personalities' => '提唱者', 'admin_personalities' => '提唱者','score' => '3'],
      ['id' => '19', 'user_personalities' => '提唱者', 'admin_personalities' => '巨匠','score' => '2'],
      ['id' => '20', 'user_personalities' => '提唱者', 'admin_personalities' => '広報運動家','score' => '1'],
      ['id' => '21', 'user_personalities' => '仲介者', 'admin_personalities' => '起業家','score' => '4'],  
      ['id' => '22', 'user_personalities' => '仲介者', 'admin_personalities' => '仲介者','score' => '3'],
      ['id' => '23', 'user_personalities' => '仲介者', 'admin_personalities' => '管理者','score' => '2'],
      ['id' => '24', 'user_personalities' => '仲介者', 'admin_personalities' => '主人公','score' => '1'],
      ['id' => '25', 'user_personalities' => '主人公', 'admin_personalities' => '管理者','score' => '4'],
      ['id' => '26', 'user_personalities' => '主人公', 'admin_personalities' => '主人公','score' => '3'],
      ['id' => '27', 'user_personalities' => '主人公', 'admin_personalities' => '起業家','score' => '2'],
      ['id' => '28', 'user_personalities' => '主人公', 'admin_personalities' => '仲介者','score' => '1'],
      ['id' => '29', 'user_personalities' => '広報運動家', 'admin_personalities' => '巨匠','score' => '4'],
      ['id' => '30', 'user_personalities' => '広報運動家', 'admin_personalities' => '広報運動家','score' => '3'],
      ['id' => '31', 'user_personalities' => '広報運動家', 'admin_personalities' => '幹部','score' => '2'],
      ['id' => '32', 'user_personalities' => '広報運動家', 'admin_personalities' => '仲介者','score' => '1'],
      ['id' => '33', 'user_personalities' => '管理者', 'admin_personalities' => '主人公','score' => '4'],
      ['id' => '34', 'user_personalities' => '管理者', 'admin_personalities' => '管理者','score' => '3'],
      ['id' => '35', 'user_personalities' => '管理者', 'admin_personalities' => '仲介者','score' => '2'],
      ['id' => '36', 'user_personalities' => '管理者', 'admin_personalities' => '起業家','score' => '1'],
      ['id' => '37', 'user_personalities' => '擁護者', 'admin_personalities' => '指揮官','score' => '4'],  
      ['id' => '38', 'user_personalities' => '擁護者', 'admin_personalities' => '擁護者','score' => '3'],
      ['id' => '39', 'user_personalities' => '擁護者', 'admin_personalities' => '論理学者','score' => '2'],
      ['id' => '40', 'user_personalities' => '擁護者', 'admin_personalities' => 'エンターテイナー','score' => '1'],
      ['id' => '41', 'user_personalities' => '幹部', 'admin_personalities' => '提唱者','score' => '4'],
      ['id' => '42', 'user_personalities' => '幹部', 'admin_personalities' => '幹部','score' => '3'],
      ['id' => '43', 'user_personalities' => '幹部', 'admin_personalities' => '広報運動家','score' => '2'],  
      ['id' => '44', 'user_personalities' => '幹部', 'admin_personalities' => '巨匠','score' => '1'],
      ['id' => '45', 'user_personalities' => '領事官', 'admin_personalities' => '建築家','score' => '4'],
      ['id' => '46', 'user_personalities' => '領事官', 'admin_personalities' => '領事官','score' => '3'],
      ['id' => '47', 'user_personalities' => '領事官', 'admin_personalities' => '討論者','score' => '2'],
      ['id' => '48', 'user_personalities' => '領事官', 'admin_personalities' => '起業家','score' => '1'],
      ['id' => '49', 'user_personalities' => '巨匠', 'admin_personalities' => '広報運動家','score' => '4'],
      ['id' => '50', 'user_personalities' => '巨匠', 'admin_personalities' => '巨匠','score' => '3'],
      ['id' => '51', 'user_personalities' => '巨匠', 'admin_personalities' => '提唱者','score' => '2'],
      ['id' => '52', 'user_personalities' => '巨匠', 'admin_personalities' => '幹部','score' => '1'],
      ['id' => '53', 'user_personalities' => '冒険家', 'admin_personalities' => '討論者','score' => '4'],
      ['id' => '54', 'user_personalities' => '冒険家', 'admin_personalities' => '冒険家','score' => '3'],
      ['id' => '55', 'user_personalities' => '冒険家', 'admin_personalities' => '領事官','score' => '2'],
      ['id' => '56', 'user_personalities' => '冒険家', 'admin_personalities' => '建築家','score' => '1'],
      ['id' => '57', 'user_personalities' => '起業家', 'admin_personalities' => '仲介者','score' => '4'],
      ['id' => '58', 'user_personalities' => '起業家', 'admin_personalities' => '起業家','score' => '3'],
      ['id' => '59', 'user_personalities' => '起業家', 'admin_personalities' => '主人公','score' => '2'],  
      ['id' => '60', 'user_personalities' => '起業家', 'admin_personalities' => '管理者','score' => '1'],
      ['id' => '61', 'user_personalities' => 'エンターテイナー', 'admin_personalities' => '論理学者','score' => '4'],
      ['id' => '62', 'user_personalities' => 'エンターテイナー', 'admin_personalities' => 'エンターテイナー','score' => '3'],
      ['id' => '63', 'user_personalities' => 'エンターテイナー', 'admin_personalities' => '指揮官','score' => '2'],
      ['id' => '64', 'user_personalities' => 'エンターテイナー', 'admin_personalities' => '擁護者','score' => '1'],
    ]);
    }
}
