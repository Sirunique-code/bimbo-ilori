<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $books = [
            "Enable Purpose Development and Realization with These Inspiring Books" => [
                ["title" => "Purposeful Parenting", "image" => "category11.jpg"],
                ["title" => "Portrait of Purpose", "image" => "category12.jpg"],
                ["title" => "Pillars of Purpose", "image" => "category13.jpg"], // Fixed typo
                ["title" => "Purpose Tiers", "image" => "category14.jpg"],
            ],

            "Build and Boost Your Faith with These Titles That Help to Be Grounded in the Fundamentals You Need" => [
                ["title" => "Unmute", "image" => "category21.jpg"],
                ["title" => "Montage", "image" => "category22.jpg"],
                ["title" => "120 Characteristics of Faith", "image" => "category23.jpg"], // Fixed spelling
                ["title" => "Faith that Fits", "image" => "category24.jpg"],
                ["title" => "Portals of Faith", "image" => "category25.jpg"],
            ],

            "Develop a Formidable Family Structure and Experience with These Titles" => [ // Merged two family categories
                ["title" => "Child Guard", "image" => "category1.jpg"],
                ["title" => "A Little Wonder", "image" => "category32.jpg"],
                ["title" => "Built to Last", "image" => "category33.jpg"],
                ["title" => "School Samples", "image" => "category34.jpg"],
                ["title" => "Marriage Voyage", "image" => "category35.jpg"],
                ["title" => "Stability Checks", "image" => "category36.jpg"],
                ["title" => "Health", "image" => "category37.jpg"],
                ["title" => "Mentorship Memoirs", "image" => "category38.jpg"],
                ["title" => "Healthy Attitudes", "image" => "category39.jpg"],
                ["title" => "Gratefulness", "image" => "category390.jpg"],
                ["title" => "Journal Leap", "image" => "category391.jpg"],
            ],

            "Engage Your Redemptive Power and Enjoy the Supernatural and Peace in These Titles" => [
                ["title" => "Flawed & Favoured", "image" => "category41.jpg"],
                ["title" => "Covenant Core", "image" => "category42.jpg"],
                ["title" => "The Insight Edge", "image" => "category43.jpg"],
                ["title" => "Past at Peace", "image" => "category44.jpg"],
                ["title" => "Heredemption", "image" => "category45.jpg"],
            ],

            "Overcome Obstacles and Reinforce Resilience with These Timeless Contents" => [
                ["title" => "Broken and Mended", "image" => "category51.jpg"],
                ["title" => "Scarlet Cord", "image" => "category52.jpg"],
                ["title" => "Managing Difficult Relationships", "image" => "category53.jpg"],
                ["title" => "Weights Off", "image" => "category54.jpg"],
                ["title" => "Advance Inspite", "image" => "category55.jpg"],
            ],

            "Master Marketplace Skills and Operations with These Transformative Guides" => [
                ["title" => "Employed to Empower", "image" => "category61.jpg"], // Fixed spelling
                ["title" => "Dispatched Decision", "image" => "category62.jpg"],
                ["title" => "Sentpreneurs", "image" => "category63.jpg"],
                ["title" => "Business Backends", "image" => "category64.jpg"],
                ["title" => "The Business Mandate", "image" => "category65.jpg"],
            ],
        ];

        foreach ($books as $category => $bookList) {
            foreach ($bookList as $bookData) {
                Book::create([
                    'title' => $bookData['title'],
                    'category' => $category,
                    'description' => "An insightful book on {$category}.", // Improved description
                    'image' => $bookData['image'],
                    'amazon_link' => "http://amazon.com/author/bimboilori",
                    'selar_link' => "https://selar.co/m/abimbola-ilori1",
                    'paystack_link' => "https://paystack.shop/bimboiloribooks",
                ]);
            }
        }
    }
}
