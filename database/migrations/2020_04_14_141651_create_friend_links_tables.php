<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendLinksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_links', function (Blueprint $table) {
            $table->integer('id');
            $table->string('web_name',25);
            $table->string('web_link',30);
            $table->string('web_email',30);
            $table->tinyinteger('web_status')->default(1);
            $table->integer('web_order');
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
        Schema::dropIfExists('friend_links');
    }
}
