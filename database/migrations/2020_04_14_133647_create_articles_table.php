<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('cate_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('article_title',30);
            $table->text('article_con');
            $table->string('article_desc',191);
            $table->string('article_key',90);
            $table->string('article_img',30);
            $table->tinyinteger('status')->default(1);
            $table->tinyinteger('allow_com')->default(1);
            $table->tinyinteger('reco')->default(0)->comment('推荐');
            $table->integer('article_num')->comments('浏览数量');
            $table->integer('article_zan')->comments('点赞');
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
        Schema::dropIfExists('articles');
    }
}
