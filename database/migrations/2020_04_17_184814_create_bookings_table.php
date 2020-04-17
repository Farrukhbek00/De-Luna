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
            $table->unsignedBigInteger('room_number');
            $table->unsignedBigInteger('customer_id');
            $table->integer('breakfast');
            $table->integer('nights');
            $table->string('comment');
            $table->string('book_type');
            $table->dateTime('book_time');

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
            
            $table->foreign('book_type')
            ->references('book_type')
            ->on('book_types')
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
        Schema::dropIfExists('bookings');
    }
}
