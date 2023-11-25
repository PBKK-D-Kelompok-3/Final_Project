<?php

namespace Database\Seeders;

use App\Models\FilmStudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmStudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FilmStudio::factory(10)->create();
    }
}
