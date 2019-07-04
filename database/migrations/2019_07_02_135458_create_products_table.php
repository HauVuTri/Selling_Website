<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//bảng chứa thông tin sản phẩm
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->string('name')->comment('name of product');
            $table->string('description')->comment('discription about product');
            $table->double('unit_price')->comment('Price of each unit');
            $table->double('promotion_price')->comment('Promotion price ');
            $table->string('image')->comment('image of product');
            $table->string('unit')->comment('type unit');
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
        Schema::dropIfExists('products');
    }
}
