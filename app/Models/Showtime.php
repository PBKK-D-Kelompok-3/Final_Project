<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Showtime extends Model
{
    protected $fillable = [
        'id',
        'day',
        'time',
    ];

    use HasFactory;

    public function film_showtime(): HasMany
    {
        return $this->hasMany(FilmShowtime::class, 'showtime_id', 'id');
    }
}
