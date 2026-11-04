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

    /**
     * Get the absolute URL of the featured image, or null if not set.
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (empty($this->image)) {
            return null;
        }

        if (Str::startsWith($this->image, ['http://', 'https://', '//'])) {
            return $this->image;
        }

        $cleanPath = ltrim($this->image, '/');
        if (Str::startsWith($cleanPath, 'storage/')) {
            return asset($cleanPath);
        }

        return asset('storage/' . $cleanPath);
    }

    /**
     * Get the link preview image URL for social media cards.
     * Uses the featured image if selected, otherwise falls back to the default website preview image.
     */
    public function getLinkPreviewImageUrlAttribute(): string
    {
        return $this->featured_image_url ?: asset('assets/img/featured-image.jpg');
    }
}

