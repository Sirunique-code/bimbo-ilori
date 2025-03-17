<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Book Title 1',
            'author' => 'Author Name',
            'description' => 'This is a sample description for the book.',
            'category' => 'Motivation',
            'image' => 'book1.jpg',
            'amazon_link' => 'https://amazon.com/book1',
            'selar_link' => 'https://selar.co/book1',
            'paystack_link' => 'https://paystack.com/pay/book1'
        ]);

        Book::create([
            'title' => 'Book Title 2',
            'author' => 'Another Author',
            'description' => 'This is another sample description.',
            'category' => 'Finance',
            'image' => 'book2.jpg',
            'amazon_link' => 'https://amazon.com/book2',
            'selar_link' => 'https://selar.co/book2',
            'paystack_link' => 'https://paystack.com/pay/book2'
        ]);
    
    }
}
