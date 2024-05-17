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
        Schema::create('tbl_ticketbooked', function (Blueprint $table) {
            $table->increments('ticketbooked_id');
            $table->integer('account_id');
            $table->integer('ticketbooked_quantity');
            $table->integer('ticketbooked_total');
            $table->string('ticketbooked_name');
            $table->string('ticketbooked_phone');
            $table->string('ticketbooked_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ticketbooked');
    }
};
