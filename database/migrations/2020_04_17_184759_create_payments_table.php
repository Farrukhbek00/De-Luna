<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('booking_id');
            $table->bigInteger('customer_id');
            $table->integer('amount');
            $table->string('paid');
            $table->dateTime('pay_time');
            $table->string('invoice');
            $table->string('cancelled');
            $table->timestamps();
            
            $table->foreign('booking_id')
            ->references('booking_id')
            ->on('bookings')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            
            $table->foreign('customer_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('payments');
    }
}
