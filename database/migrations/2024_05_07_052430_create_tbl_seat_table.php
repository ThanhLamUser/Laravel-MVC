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
        Schema::create('tbl_seat', function (Blueprint $table) {
            $table->increments('seat_id');
            $table->integer('room_id');
            $table->integer('showtime_id');
            $table->string('seat_name');
            $table->string('seat_type');
            $table->string('seat_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_seat');
    }
};
