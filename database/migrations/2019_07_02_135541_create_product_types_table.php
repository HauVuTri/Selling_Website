<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//bảng này là các loại sản phẩm
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('name of type_product');
            $table->string('description')->comment('description about this type_product');
            $table->string('image')->comment('image of this type product');
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
        Schema::dropIfExists('product_types');
    }
}
