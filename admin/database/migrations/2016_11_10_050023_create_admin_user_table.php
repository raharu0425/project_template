<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //テーブルの作成
        Schema::create('admin_user', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('account', 128);
            $table->string('password', 128);
            $table->enum('role', ['guest', 'member', 'leader', 'admin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //テーブルの削除
        Schema::drop('admin_user');
    }
}
