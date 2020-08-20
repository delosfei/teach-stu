<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('昵称');
            $table->string('email')->unique()->nullable()->comment('邮箱');
            $table->string('mobile')->unique()->nullable()->comment('手机号');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('github')->nullable()->comment('GITHUB帐号');
            $table->string('qq')->nullable()->comment('qq帐号');
            $table->string('weibo')->nullable()->comment('微博帐号');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('group_id')->nullable()->constrained()->onDelete('set null');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
