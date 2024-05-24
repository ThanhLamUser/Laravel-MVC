<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_bookingdetail', function (Blueprint $table) {
            $table->increments('bookingdetail_id');
            $table->integer('booking_id');
            $table->integer('seat_id')  ;
            $table->integer('booking_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_bookingdetail');
    }
};
