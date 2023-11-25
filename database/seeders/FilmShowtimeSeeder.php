<?php

namespace Database\Seeders;

use App\Models\FilmShowtime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FilmShowtime::factory(10)->create();
    }
}
