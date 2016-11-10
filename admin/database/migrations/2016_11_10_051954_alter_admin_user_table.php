<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account', 128);
            $table->string('password', 128);
            $table->enum('role', ['guest', 'member', 'leader', 'admin']);
        });
    }
}
