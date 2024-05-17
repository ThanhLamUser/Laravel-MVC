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
        Schema::create('tbl_popcorndrink', function (Blueprint $table) {
            $table->increments('popcorndrink_id');
            $table->string('popcorndrink_combo');
            $table->string('popcorndrink_img');
            $table->string('popcorndrink_popcorn');
            $table->string('popcorndrink_drink');
            $table->integer('popcorndrink_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_popcorndrink');
    }
};
