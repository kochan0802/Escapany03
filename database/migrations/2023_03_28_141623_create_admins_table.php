<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id()->comment('コーチID');
            $table->integer('category_id')->comment('ジャンルID')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('license')->comment('資格');
            $table->text('career')->comment('経歴');
            $table->enum('personalities',['建築家','論理学者','指揮官','討論者','提唱者','仲介者','主人公','広報運動家','管理者','擁護者','幹部','領事館','巨匠','冒険者','起業家','エンターテイナー'])->coment('');
            $table->string('url');
            $table->string('profile_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};


 
