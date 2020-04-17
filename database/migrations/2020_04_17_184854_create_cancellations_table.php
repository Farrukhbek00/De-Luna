<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancellationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancellations', function (Blueprint $table) {
            $table->id('booking_id');
            $table->dateTime('arrival');
            $table->dateTime('checkout');
            $table->unsignedBigInteger('room_number');
            $table->unsignedBigInteger('customer_id');
            $table->integer('breakfast');
            $table->integer('nights');
            $table->dateTime('book_time');
            $table->dateTime('cancel_time');
            
            $table->foreign('room_number')
            ->references('room_number')
            ->on('rooms')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('customer_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('booking_id')
            ->references('booking_id')
            ->on('bookings')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancellations');
    }
}
