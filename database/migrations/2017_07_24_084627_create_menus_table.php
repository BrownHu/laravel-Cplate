<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Cname')->unique();
            $table->string('Ename')->unique();
            $table->string('url')->unique();
            $table->increments('sort')->unique()->comment('排列优先级');
            $table->boolean('show')->default(true)->comment('是否展示在导航栏');
            $table->boolean('enable')->default(true)->comment('是否使能');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
