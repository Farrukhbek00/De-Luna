<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->dateTime('arrival');
            $table->dateTime('checkout');
            $table->bigInteger('room_number');
            $table->bigInteger('customer_id');
            $table->integer('breakfast');
            $table->integer('nights');
            $table->string('comment');
            $table->string('book_type');
            $table->dateTime('book_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
