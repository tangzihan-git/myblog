<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedTagsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $tags = [
                [
                    'tag_name'=>'Laravel',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'JavaScript',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'PHP',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'心情随笔',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'Linux',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'Mysql',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'redis',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ],
                 [
                    'tag_name'=>'Nodejs',
                    'created_at'=>'2020-03-19 08:34:4',
                    'updated_at'=>'2020-03-19 08:34:4',

                ]

            ];
            DB::table('tags')->insert($tags);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            //
        });
    }
}
