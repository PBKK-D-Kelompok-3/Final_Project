<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];


    public function film_studio(): HasMany
    {
        return $this->hasMany(FilmStudio::class, 'studio_id', 'id');
    }
}
