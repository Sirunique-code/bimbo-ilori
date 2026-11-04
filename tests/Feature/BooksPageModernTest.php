<?php

use App\Models\Book;
use Database\Seeders\BooksTableSeeder;

beforeEach(function () {
    (new BooksTableSeeder)->run();
});

it('renders the modernized books index page successfully with category bundle plans', function () {
    $response = $this->get(route('books.index'));

    $response->assertOk();

    // Verify presence of modernized hero & elements
    $response->assertSee('Life Purpose &amp; Personal Development Library', false);
    $response->assertSee('Category Bundle Plans (20% Off)', false);
    $response->assertSee('booksLiveSearch', false);

    // Verify presence of the user-updated category bundle plan descriptions
    $response->assertSee('Faith Category Bundle Pack', false);
    $response->assertSee('Strengthen Your Spirit. Deepen Your Walk.', false);
    $response->assertSee('Parenting Skills Category Bundle Pack', false);
    $response->assertSee('Parenting Skill Collection Strengthen Your Home.', false);
    $response->assertSee('Business Insights Category Bundle Pack', false);

    // Verify series headers and anchor slugs
    $response->assertSee('id="faith-development"', false);
    $response->assertSee('id="purpose-development"', false);
    $response->assertSee('id="marriage-enrichment"', false);
});

it('renders the single book details page with modern layout', function () {
    $book = Book::first();

    $response = $this->get(route('books.show', $book->id));

    $response->assertOk();
    $response->assertSee($book->title, false);
    $response->assertSee('Available Purchase Options', false);
    $response->assertSee('Back to All Books', false);
});
