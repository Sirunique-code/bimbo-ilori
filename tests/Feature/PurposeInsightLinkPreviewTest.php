<?php

use App\Models\PurposeInsight;
use Illuminate\Support\Facades\Storage;

it('renders individual post featured image as link preview image on blog post page', function () {
    Storage::fake('public');
    Storage::disk('public')->put('purpose-insights/my-featured-cover.jpg', 'fake-image-binary');

    $insight = PurposeInsight::create([
        'title' => 'Unlocking Your True Potential',
        'slug' => 'unlocking-your-true-potential',
        'category' => 'Purpose & Personal Discovery',
        'opening_tip' => 'Discover how purpose realigns every single decision you make in life.',
        'content' => 'Full article body discussing purpose and personal discovery.',
        'image' => 'purpose-insights/my-featured-cover.jpg',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $expectedImageUrl = asset('storage/purpose-insights/my-featured-cover.jpg');

    $response = $this->get(route('purpose-insight.show', $insight->slug));

    $response->assertOk();

    // Verify Open Graph & Twitter meta tags use the individual post featured image
    $response->assertSee('<meta property="og:image" content="' . $expectedImageUrl . '"', false);
    $response->assertSee('<meta property="og:image:secure_url" content="' . $expectedImageUrl . '"', false);
    $response->assertSee('<meta name="twitter:image" content="' . $expectedImageUrl . '"', false);

    // Verify Open Graph & Twitter meta tags have the post title, description, url, and article type
    $response->assertSee('<meta property="og:type" content="article"', false);
    $response->assertSee('<meta property="og:title" content="Unlocking Your True Potential | Bimbo Ilori Purpose Insights"', false);
    $response->assertSee('<meta name="twitter:title" content="Unlocking Your True Potential | Bimbo Ilori Purpose Insights"', false);
    $response->assertSee('<meta property="og:description" content="Discover how purpose realigns every single decision you make in life."', false);
    $response->assertSee('<meta name="twitter:description" content="Discover how purpose realigns every single decision you make in life."', false);
    $response->assertSee('<meta property="og:url" content="' . route('purpose-insight.show', $insight->slug) . '"', false);
    $response->assertSee('<meta property="article:section" content="Purpose &amp; Personal Discovery"', false);
});

it('falls back to general website preview image when blog post has no featured image', function () {
    $insight = PurposeInsight::create([
        'title' => 'Post Without Featured Image',
        'slug' => 'post-without-featured-image',
        'category' => 'Faith Development',
        'opening_tip' => 'Faith is the anchor of hope.',
        'content' => 'Deep insights on faith and hope.',
        'image' => null,
        'is_published' => true,
        'published_at' => now(),
    ]);

    $defaultWebsiteImage = asset('assets/img/featured-image.jpg');

    $response = $this->get(route('purpose-insight.show', $insight->slug));

    $response->assertOk();

    // Falls back to website general featured image
    $response->assertSee('<meta property="og:image" content="' . $defaultWebsiteImage . '"', false);
    $response->assertSee('<meta name="twitter:image" content="' . $defaultWebsiteImage . '"', false);
    $response->assertSee('<meta property="og:title" content="Post Without Featured Image | Bimbo Ilori Purpose Insights"', false);
});

it('renders default general link preview image on regular website pages', function () {
    $defaultWebsiteImage = asset('assets/img/featured-image.jpg');

    $response = $this->get('/');

    $response->assertOk();
    $response->assertSee('<meta property="og:image" content="' . $defaultWebsiteImage . '"', false);
    $response->assertSee('<meta name="twitter:image" content="' . $defaultWebsiteImage . '"', false);
    $response->assertSee('<meta property="og:type" content="website"', false);
});

it('correctly computes model accessors for featured_image_url and link_preview_image_url', function () {
    $defaultWebsiteImage = asset('assets/img/featured-image.jpg');

    // Case 1: Null image
    $insightWithoutImage = new PurposeInsight(['image' => null]);
    expect($insightWithoutImage->featured_image_url)->toBeNull();
    expect($insightWithoutImage->link_preview_image_url)->toBe($defaultWebsiteImage);

    // Case 2: Standard relative storage path
    $insightWithPath = new PurposeInsight(['image' => 'purpose-insights/cover1.jpg']);
    expect($insightWithPath->featured_image_url)->toBe(asset('storage/purpose-insights/cover1.jpg'));
    expect($insightWithPath->link_preview_image_url)->toBe(asset('storage/purpose-insights/cover1.jpg'));

    // Case 3: Leading slash
    $insightWithLeadingSlash = new PurposeInsight(['image' => '/purpose-insights/cover2.jpg']);
    expect($insightWithLeadingSlash->featured_image_url)->toBe(asset('storage/purpose-insights/cover2.jpg'));

    // Case 4: Storage prefix
    $insightWithStoragePrefix = new PurposeInsight(['image' => 'storage/purpose-insights/cover3.jpg']);
    expect($insightWithStoragePrefix->featured_image_url)->toBe(asset('storage/purpose-insights/cover3.jpg'));

    // Case 5: External full URL
    $externalUrl = 'https://images.unsplash.com/photo-123456';
    $insightWithExternalUrl = new PurposeInsight(['image' => $externalUrl]);
    expect($insightWithExternalUrl->featured_image_url)->toBe($externalUrl);
    expect($insightWithExternalUrl->link_preview_image_url)->toBe($externalUrl);
});
