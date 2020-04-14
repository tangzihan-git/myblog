<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');
            $table->string('user_ip');
            $table->integer('parent_id')->default(0)->comments('父级评论id');
            $table->integer('level')->default(0)->comments('评论级别');
            $table->string('content',191);
            $table->integer('num');
            $table->integer('zan');
            $table->integer('cai');
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
        Schema::dropIfExists('comments');
    }
}
