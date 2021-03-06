<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->unique()->comment('模块名称');
            $table->string('name', 30)->unique()->comment('模块标识');
            $table->string('version', 50)->comment('版本号');
            $table->string('preview', 300)->comment('预览图');
            $table->string('description', 200)->unique()->comment('模块标识');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
