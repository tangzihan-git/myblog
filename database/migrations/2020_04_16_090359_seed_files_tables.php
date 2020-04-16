<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Article;
use Carbon\Carbon;
class SeedFilesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('files', function (Blueprint $table) {
            $data = Article::limit(10)->get();
            foreach ($data as $key => $value) {
                DB::table('files')->insert([
                    'article_id'=>$value->id,
                    'title'=>$value->title,
                    'year'=>date('Y',strtotime($value->created_at))

                ]);
            }
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            //
            $table->trunslate();
        });
    }
}
