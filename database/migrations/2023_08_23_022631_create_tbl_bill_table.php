<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bill', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('email');
            $table -> string('phone_number', 11);
            $table -> string('address');
            $table ->decimal('total_price', 12, 0);
            $table ->json('product_buy');
            $table ->string('note');
            $table -> enum('payment_method', ['direct_payment', 'payment_home']);
            $table -> enum('order_status', ['order_confirm', 'delivering', 'delivery_successful']);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bill');
    }
}
