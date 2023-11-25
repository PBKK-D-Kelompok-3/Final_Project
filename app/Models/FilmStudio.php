<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FilmStudio extends Model
{
    protected $fillable = [
        'id',
        'studio_id',
        'film_id',
    ];

    use HasFactory;

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }

    public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'id');
    }

    public function studio_film(): HasMany
    {
        return $this->hasMany(StudioFilm::class, 'film_studio_id', 'id');
    }

}
