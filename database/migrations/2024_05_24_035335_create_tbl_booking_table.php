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
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('showtime_id');
            $table->integer('movie_id');
            $table->integer('user_id')->nullable();
            $table->string('booking_status');
            $table->integer('booking_total');
            $table->date('booking_date');
            $table->integer('ticketbooked_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_booking');
    }
};
