<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedTagsArticlesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tag_articles', function (Blueprint $table) {
            $data = [
                [
                    'tag_id'=>1,
                    'article_id'=>2,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ], 
                [
                    'tag_id'=>1,
                    'article_id'=>3,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>1,
                    'article_id'=>4,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>2,
                    'article_id'=>5,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                
                 [
                    'tag_id'=>3,
                    'article_id'=>6,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>4,
                    'article_id'=>7,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>5,
                    'article_id'=>8,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>6,
                    'article_id'=>9,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>7,
                    'article_id'=>10,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>8,
                    'article_id'=>11,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>8,
                    'article_id'=>12,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>6,
                    'article_id'=>13,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>5,
                    'article_id'=>14,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>4,
                    'article_id'=>14,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>5,
                    'article_id'=>15,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>6,
                    'article_id'=>14,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>7,
                    'article_id'=>17,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>8,
                    'article_id'=>18,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>2,
                    'article_id'=>19,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>1,
                    'article_id'=>20,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>4,
                    'article_id'=>21,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>4,
                    'article_id'=>22,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>7,
                    'article_id'=>23,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ],
                 [
                    'tag_id'=>8,
                    'article_id'=>24,
                    'created_at'=>'2020-4-5 8:40:45',
                    'updated_at'=>'2020-4-5 8:40:45',
                ]
            ];
            DB::table('tag_articles')->insert($data);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tag_articles', function (Blueprint $table) {
            //
        });
    }
}
