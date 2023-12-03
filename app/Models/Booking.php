<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['film_showtime_id', 'seats', 'studio_name', 'day', 'time', 'total_seats', 'harga','link_pembayaran','user_id'];

    // Add relationships if needed
    public function filmShowtime()
    {
        return $this->belongsTo(FilmShowtime::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
