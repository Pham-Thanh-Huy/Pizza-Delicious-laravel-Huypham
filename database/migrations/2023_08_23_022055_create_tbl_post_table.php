<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->id();
            $table ->bigInteger('category_post_id')->unsigned();
            $table -> foreign('category_post_id')->references('id')->on('category_post')->cascadeOnDelete();
            $table -> string('post_name');
            $table -> text('post_detail');
            $table -> text('post_thumb');
            $table -> bigInteger('user_id')->unsigned();
            $table -> foreign('user_id')-> references('id')-> on('users') -> cascadeOnDelete();
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
        Schema::dropIfExists('tbl_post');
    }
}
