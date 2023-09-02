<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SysMenuGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_menu_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('deskripsi')->nullable();
            $table->integer('order_no')->nullable();
            $table->integer('status')->default(1);
            $table->integer('created_user')->nullable();
            $table->timestamp('created_date')->nullable();
            $table->integer('updated_user')->nullable();
            $table->timestamp('updated_date')->nullable();
            $table->integer('deleted_user')->nullable();
            $table->timestamp('deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_menu_group');
    }
}
