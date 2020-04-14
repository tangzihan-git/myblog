<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCateData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cate = [
            [
                'cate_name'=>'前端',
                'cate_status'=>1,
                'cate_order'=>1,
            ],
            [
                'cate_name'=>'程序',
                'cate_status'=>1,
                'cate_order'=>2,
            ],
            [
                'cate_name'=>'技术分享',
                'cate_status'=>1,
                'cate_order'=>3,
            ],
            [
                'cate_name'=>'心情随笔',
                'cate_status'=>1,
                'cate_order'=>4,
            ],
            [
                'cate_name'=>'美文',
                'cate_status'=>1,
                'cate_order'=>5,
            ],
            [
                'cate_name'=>'关于我',
                'cate_status'=>1,
                'cate_order'=>6,
            ],
            [
                'cate_name'=>'留言版',
                'cate_status'=>1,
                'cate_order'=>7,
            ],
            [
                'cate_name'=>'Html&css',
                'cate_status'=>1,
                'cate_order'=>8,
            ]

        ];
        DB::table('cates')->insert($cate);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('cates')->truncate();
    }
}
