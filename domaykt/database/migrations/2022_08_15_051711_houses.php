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
        Schema::create('house', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('image');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('floors');
            $table->integer('entrance');
            $table->boolean('is_floor');
            $table->integer('status_object')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('house', function (Blueprint $table) {
            $table->foreignId('status_object')->references('id')->on('status_object');
        });
    }
};
