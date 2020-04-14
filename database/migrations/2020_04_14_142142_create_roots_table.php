<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRootsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->tinyinteger('user_manage');
            $table->tinyinteger('con_manage');
            $table->tinyinteger('sys_manage');
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
        Schema::dropIfExists('roots');
    }
}
