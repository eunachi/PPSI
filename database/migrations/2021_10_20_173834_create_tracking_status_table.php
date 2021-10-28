<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('status');
            $table->unsignedBigInteger('track_id');
            $table->string('alamat', 255)->nullable();
            $table->foreign('track_id')->references('id')->on('trackings');
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
        Schema::dropIfExists('tracking_status');
    }
}
