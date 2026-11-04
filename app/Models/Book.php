<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Book extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'title',
        'bookpaystackdigital_link',
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

    /**
     * Get the absolute URL of the book image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/img/featured-image.jpg');
        }

        if (Str::startsWith($this->image, ['http://', 'https://', '//'])) {
            return $this->image;
        }

        $clean = ltrim($this->image, '/');
        if (Str::startsWith($clean, 'storage/')) {
            return asset($clean);
        }

        return asset('storage/' . $clean);
    }

    /**
     * Check if this book is a category bundle/collection pack.
     */
    public function getIsBundleAttribute(): bool
    {
        return Str::contains(strtolower($this->title), ['bundle', 'pack', 'collection']);
    }
}
