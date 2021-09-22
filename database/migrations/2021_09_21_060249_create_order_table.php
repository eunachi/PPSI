<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('jemput', 255);
            $table->string('nama_pengirim', 255);
            $table->string('start_time', 255);
            $table->string('arrival_time', 255);
            $table->bigInteger('telp_jemput');
            $table->string('alamat_jemput',255);
            $table->string('armada',255);
            $table->string('jadwal', 255);
            $table->boolean('feed_m');
            $table->string('tujuan', 255);
            $table->string('nama_penerima', 255);
            $table->string('alamat_tujuan', 255);
            $table->string('telp_tujuan');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('orders');
    }
}
