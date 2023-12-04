<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_showtime_id')->constrained(); // assuming you have a foreign key relationship
            $table->foreignId('user_id')->constrained();
            $table->json('seats'); // store seats as JSON data
            $table->string('studio_name');
            $table->date('day');
            $table->time('time');
            $table->integer('total_seats');
            $table->integer('harga');
            $table->string('link_pembayaran');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
