<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('web_title');
            $table->string('web_keys');
            $table->string('web_desc');
            $table->string('web_copy');
            $table->string('web_banner');
            $table->string('web_num');
            $table->string('web_connect');
            $table->string('web_allowIp');
            $table->integer('web_controll');
            $table->text('web_code');
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
        Schema::dropIfExists('webset');
    }
}
