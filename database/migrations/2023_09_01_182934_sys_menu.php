<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SysMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('parent_id')->default(0);
            $table->string('routes');
            $table->integer('group_menu');
            $table->string('icon');
            $table->integer('is_hidden')->default(0);
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
