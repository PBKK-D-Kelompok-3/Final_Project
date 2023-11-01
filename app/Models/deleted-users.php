<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deleted-users extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'confirm',
        'gambar'
    ];
}
