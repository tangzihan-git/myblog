<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedWebsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websets', function (Blueprint $table) {
            $data = [
                'web_title'=>'唐子涵的个人博客',
                'web_keys'=>'博客,唐子涵个人博客,技术博客,个人博客,技术博客,php个人博客,优秀的个人网站,优秀的个人博客,博客模板,唐子涵博客模板',
                'web_desc'=>'唐子涵的个人博客，是一个爱音乐，爱分享的男程序猿的个人博客网站，分享个人开发经验的技术博客',
                'web_copy'=>'',
                'web_banner'=>'',
                'web_num'=>'蜀ICP备20010777号',
                'web_connect'=>'2197486242@qq.com',
                'web_allowIp'=>'0.0.0.0',
                'web_controll'=>'5',
                'web_code'=>'',
                'created_at'=>date('Y-m-d H:i:s'),



            ];
            \DB::table('webset')->insert($data);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websets', function (Blueprint $table) {
            //
        });
    }
}
