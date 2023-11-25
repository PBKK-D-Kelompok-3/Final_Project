<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudioFilm extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_studio_id',
        'film_showtime_id'
    ];

    public function film_studio(): BelongsTo
    {
        return $this->belongsTo(FilmStudio::class, 'film_studio_id', 'id');
    }

    public function film_showtime():BelongsTo
    {
        return $this->belongsTo(FilmShowtime::class, 'film_showtime_id', 'id');
    }
}
