<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure the 'quotes' folder exists in storage/app/public
        Storage::disk('public')->makeDirectory('quotes');

        // Sample images (ensure these are placed in storage/app/public/quotes)
        $quotes = [
            ['image' => 'quotes/quote1.jpg'],
            ['image' => 'quotes/quote2.jpg'],
            ['image' => 'quotes/quote3.jpg'],
            ['image' => 'quotes/quote4.jpg'],
            ['image' => 'quotes/quote5.jpg'],
            ['image' => 'quotes/quote6.jpg'],
            ['image' => 'quotes/quote7.jpg'],
            ['image' => 'quotes/quote8.jpg'],
            ['image' => 'quotes/quote9.jpg'],
        ];

        foreach ($quotes as $quote) {
            Quote::create([
                'image' => $quote['image'],
            ]);
        }
    }
}
