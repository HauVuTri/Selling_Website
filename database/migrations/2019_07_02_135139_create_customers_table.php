<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {// bảng chứa thông tin khách hàng mua hàng
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender')->nullable(false)->comment('Gender');
            $table->string('email')->comment('Email');
            $table->string('address')->nullable(false)->comment('Address');
            $table->string('phone_number')->nullable(false)->comment('Phone number');
            $table->string('note')->comment('note');
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
        Schema::dropIfExists('customers');
    }
}
