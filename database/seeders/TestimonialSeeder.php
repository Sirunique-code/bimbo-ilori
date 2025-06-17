<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure the testimonials folder exists
        Storage::disk('public')->makeDirectory('testimonials');

        // Sample images (you will manually place these later in storage/app/public/testimonials)
        $testimonials = [
            ['image' => 'testimonials/testimonials1.png'],
            ['image' => 'testimonials/testimonials2.png'],
            ['image' => 'testimonials/testimonials3.png'],
            ['image' => 'testimonials/testimonials4.png'],

        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create([
                'image' => $testimonial['image'],
            ]);
        }
    }
}
