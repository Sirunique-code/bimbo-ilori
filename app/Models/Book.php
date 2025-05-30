<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{ 
    use HasFactory;

   protected $fillable = [
    'title',
    'bookpaystackdigital_link', // Make sure this is included
    'bookpaystack_link',
    'bookamazon_link',
    'bookselar_link',
    'category',
    'description',
    'image',
    'amazon_link',
    'selar_link',
    'paystack_link'
];
}
