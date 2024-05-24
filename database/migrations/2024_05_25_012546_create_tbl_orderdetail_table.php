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
        Schema::create('tbl_orderdetail', function (Blueprint $table) {
            $table->increments('orderdetail_id');
            $table->integer('order_id');
            $table->integer('popcorndrink_id')  ;
            $table->integer('orderdetail_quantity');
            $table->integer('orderdetail_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_orderdetail');
    }
};
