<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyStrain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('id_customer')->references('id')->on('customers');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('id_type')->references('id')->on('product_types');
        });
        Schema::table('image_products', function (Blueprint $table) {
            $table->foreign('id_product')->references('id')->on('products');
        });
        Schema::table('bill_details', function (Blueprint $table) {
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( "bills", function( $table )
        {
            $table->dropForeign('bills_id_customer_foreign');
        });

        Schema::table( "products", function( $table )
        {
            $table->dropForeign('products_id_type_foreign');
        });

        Schema::table( "image_products", function( $table )
        {
            $table->dropForeign('image_products_id_product_foreign');
        });

        Schema::table( "bill_details", function( $table )
        {
            $table->dropForeign('bill_details_id_bill_foreign');
            $table->dropForeign('bill_details_id_product_foreign');
        });
    }
}

