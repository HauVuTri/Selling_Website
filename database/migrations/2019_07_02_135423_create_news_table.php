<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//bảng chứa những tin mới cho website
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('title of news');
            $table->string('content')->comment('content of news');
            $table->string('image')->comment('image is used in this news');
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
        Schema::dropIfExists('news');
    }
}
