<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('product_name');
            $table->string('product_description');
            $table->integer('product_price');
            $table->string('product_color');
            $table->integer('product_quantity');
            $table->string('product_size');
            $table->string('image_front');
            $table->string('image_back');
            $table->string('image_left');
            $table->string('image_right');
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
};
