<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChattingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatting', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 255);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('checkout_id');
            $table->foreign('checkout_id')->references('id')->on('checkout');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('chatting');
    }
}
