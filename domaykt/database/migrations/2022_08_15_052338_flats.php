<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->double('price_for_square');
            $table->double('square');
            $table->double('total_price');
            $table->integer('rooms');
            $table->string('image');
            $table->foreignId('status_flat')->references('id')->on('status_flats');
            $table->foreignId('house_id')->references('id')->on('houses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::create('flats', function (Blueprint $table) {
            $table->foreignId('status_flat')->references('id')->on('status_flats');
            $table->foreignId('house_id')->references('id')->on('houses');
        });*/
    }
};
