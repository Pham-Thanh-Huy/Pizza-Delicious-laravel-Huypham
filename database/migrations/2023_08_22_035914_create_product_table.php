<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_product_id')->unsigned();
            $table->foreign('category_product_id')->references('id')->on('category_product')->cascadeOnDelete();
            $table->string('product_name');
            $table->decimal('price', 12, 0)->nullable();
            $table->decimal('inch_9_price', 12, 0)->nullable();
            $table->decimal('inch_12_price', 12, 0)->nullable();
            $table->text('product_description');
            $table->text('product_thumb');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('tbl_product');
    }
}
