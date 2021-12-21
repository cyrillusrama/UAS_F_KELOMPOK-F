<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'paket_wisata_id',
        'user_id',
        'booking_date',
        'first_name',
        'last_name',
        'phone',
        'address',
    ];

    protected $casts = [
        'booking_date' => 'date:Y-m-d'
    ];
}
