<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('birthday')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('personalities',['建築家','論理学者','指揮官','討論者','提唱者','仲介者','主人公','広報運動家','管理者','擁護者','幹部','領事館','巨匠','冒険者','起業家','エンターテイナー'])->coment('');
            $table->string('profile_image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('personality_test');
            $table->dropColumn('profile_image');
        });
    }
}