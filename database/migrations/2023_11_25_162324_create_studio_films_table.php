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
        Schema::create('studio_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_studio_id')->constrained('film_studios');
            $table->foreignId('film_showtime_id')->constrained('film_showtimes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studio_films');
    }
};
