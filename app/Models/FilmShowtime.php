<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FilmShowtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'showtime_id',
        'film_id',
    ];

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }

    public function showtime(): BelongsTo
    {
        return $this->belongsTo(Showtime::class, 'showtime_id', 'id');
    }

    public function studio_film(): HasMany
    {
        return $this->hasMany(StudioFilm::class, 'film_showtime_id', 'id');
    }
}
