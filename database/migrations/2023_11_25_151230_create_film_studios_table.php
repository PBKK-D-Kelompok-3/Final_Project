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
        Schema::create('film_studios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studio_id')->constrained('studios');
            $table->foreignId('film_id')->constrained('films');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('film_studios', function (Blueprint $table) {
            $table->dropForeign('studio_id');
            $table->dropForeign('film_id');
        });
        Schema::dropIfExists('film_studios');
    }
};
