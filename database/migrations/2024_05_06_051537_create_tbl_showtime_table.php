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
        Schema::create('tbl_showtime', function (Blueprint $table) {
            $table->increments('showtime_id');
            $table->integer('movie_id');
            $table->integer('room_id');
            $table->date('showtime_date');
            $table->time('showtime_timeslot');
            $table->time('showtime_endtime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_showtime');
    }
};
