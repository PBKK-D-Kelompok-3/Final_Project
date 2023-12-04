<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id', 'doc_no', 'description', 'amount', 'payment_status', 'payment_link'];
    protected $guarded = ['id'];

    public function booking()
    {
        return $this->belongsTo(Tagihan::class);
    }
}

