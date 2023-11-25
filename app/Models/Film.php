<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;


    protected $fillable = [
        'judul',
            'genre',
            'produser' ,
            'sutradara' ,
            'penulis' ,
            'produksi',
            'durasi',
            'sinopsis',
    ];

    public function film_showtime(): HasMany
    {
        return $this->hasMany(FilmShowtime::class, 'film_id', 'id');
    }

    public function film_studio(): HasMany
    {
        return $this->hasMany(FilmStudio::class, 'film_id', 'id');
    }
}
