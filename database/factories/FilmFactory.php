<?php

namespace Database\Factories;

use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->name(),
            'genre' => Arr::random(['Adventure', 'Action', 'Horror', 'Thriller', 'Romance', 'Drama', 'Psychological', 'Comedy', 'Biografi', 'Dokumentari']),
            'produser' => fake()->name(),
            'sutradara' => fake()->name(),
            'penulis' => fake()->name(),
            'produksi'=> fake()->name(),
            'durasi' => Arr::random([50, 120, 60, 65, 30]),
            'poster' => Arr::random(['film-1.jpeg', 'film-2.jpeg', 'film-3.jpeg', 'film-4.jpeg', 'film-5.jpeg', 'film-6.jpeg', 'film-7.jpeg', 'film-8.jpeg', 'film-9.jpeg', 'film-10.jpeg', 'film-11.jpeg', 'film-12.jpeg', 'film-13.jpeg', 'film-14.jpeg', 'film-15.jpeg', 'film-16.jpeg', 'film-17.jpeg', 'film-18.jpeg']),
            'sinopsis' => fake()->sentence(100),
        ];
    }
}
