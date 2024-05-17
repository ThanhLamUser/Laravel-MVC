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
        Schema::create('tbl_movie', function (Blueprint $table) {
            $table->increments('movie_id');
            $table->string('movie_name',100);
            $table->string('movie_img');
            $table->string('movie_category');
            $table->string('movie_time');
            $table->date('movie_datestart');
            $table->string('movie_age');
            $table->string('movie_direct');
            $table->string('movie_actor');
            $table->text('movie_desc');
            $table->integer('movie_status');
            $table->text('movie_iframe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_movie');
    }
};
