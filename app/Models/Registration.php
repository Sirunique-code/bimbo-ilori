<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
     use HasFactory;

    // Add the fillable fields here
    protected $fillable = [
        'lastName',
        'firstName', // Matches the column name in the database // Matches the column name in the database
        'whatsappNumber',
        'email',
    ];
}
