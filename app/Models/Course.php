<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_title',
        'course_description',
        'course_description2',
        'course_track',
        'course_price_usd',
        'course_price_ngn',
        'course_duration',
        'course_image',
        'register_link',
        'pay_link',
    ];
}
