<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenryuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 16);
            $table->string('user_email', 255)->unique();
            $table->char('user_password', 255);
            $table->string('user_img', 64)->nullable()->comment('ユーザーアイコン');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_img', 64);
            $table->string('product_haikai', 64);
            $table->datetime('product_time')->comment('投稿日時');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->string('count');

            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('user_like_post', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('products');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('user_like_post');
    }
}
