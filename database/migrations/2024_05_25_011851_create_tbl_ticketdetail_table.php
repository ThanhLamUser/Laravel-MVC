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
        Schema::create('tbl_ticketdetail', function (Blueprint $table) {
            $table->increments('ticketdetail_id');
            $table->integer('bookingdetail_id');
            $table->integer('ticket_id')  ;
            $table->integer('ticketdetail_price');
            $table->date('ticketdetail_issuedate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ticketdetail');
    }
};
