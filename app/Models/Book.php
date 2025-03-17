<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'amazon_link',
        'selar_link',
        'paystack_link',
    ];
}
