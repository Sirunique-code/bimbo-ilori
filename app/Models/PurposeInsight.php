<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PurposeInsight extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'opening_tip',
        'content',
        'image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($insight) {
            if (empty($insight->slug)) {
                $insight->slug = Str::slug($insight->title) . '-' . Str::random(5);
            }
            if (empty($insight->published_at)) {
                $insight->published_at = now();
            }
        });
    }
}
