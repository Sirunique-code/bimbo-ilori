<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThankYouBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_proof',
        'preferred_date',
        'preferred_time',
    ];
}
