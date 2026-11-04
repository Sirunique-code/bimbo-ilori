<?php

use App\Models\PurposeInsight;
use App\Livewire\Superadmin\PurposeInsights\PurposeInsightManager;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

it('can load purpose insight edit mode and update all fields successfully', function () {
    Storage::fake('public');

    // Create fake initial image
    Storage::disk('public')->put('purpose-insights/old_sample.jpg', 'fake content');

    $insight = PurposeInsight::create([
        'title' => 'Original Title',
        'slug' => 'original-title-1234',
        'category' => 'Faith Development',
        'opening_tip' => 'Original tip teaser snippet',
        'content' => 'Original article full content body',
        'image' => 'purpose-insights/old_sample.jpg',
        'is_published' => true,
    ]);

    $component = Livewire::test(PurposeInsightManager::class)
        ->assertSee('Original Title')
        ->call('edit', $insight->id)
        ->assertSet('isEditing', true)
        ->assertSet('title', 'Original Title')
        ->assertSet('category', 'Faith Development')
        ->assertSet('opening_tip', 'Original tip teaser snippet')
        ->assertSet('content', 'Original article full content body')
        ->assertSet('existing_image', 'purpose-insights/old_sample.jpg')
        ->assertSet('is_published', true);

    // Update with new image and modified text
    $newImage = UploadedFile::fake()->create('updated_cover.jpg', 150, 'image/jpeg');

    $component->set('title', 'Brand New Edited Title')
        ->set('category', 'Leadership & Influence')
        ->set('opening_tip', 'Brand new teaser insight tip')
        ->set('content', 'Brand new updated article body content')
        ->set('image', $newImage)
        ->set('is_published', false)
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('isEditing', false);

    $insight->refresh();

    expect($insight->title)->toBe('Brand New Edited Title');
    expect($insight->category)->toBe('Leadership & Influence');
    expect($insight->opening_tip)->toBe('Brand new teaser insight tip');
    expect($insight->content)->toBe('Brand new updated article body content');
    expect($insight->is_published)->toBeFalse();
    expect($insight->image)->not->toBe('purpose-insights/old_sample.jpg');
    expect(Storage::disk('public')->exists($insight->image))->toBeTrue();
    // Verify old image was removed
    expect(Storage::disk('public')->exists('purpose-insights/old_sample.jpg'))->toBeFalse();
});

it('can remove an existing image when editing a purpose insight', function () {
    Storage::fake('public');

    Storage::disk('public')->put('purpose-insights/to_be_removed.jpg', 'fake content');

    $insight = PurposeInsight::create([
        'title' => 'Article With Image',
        'slug' => 'article-with-image',
        'category' => 'Business & Entrepreneurship',
        'opening_tip' => 'Tip before image removal',
        'content' => 'Content before image removal',
        'image' => 'purpose-insights/to_be_removed.jpg',
        'is_published' => true,
    ]);

    Livewire::test(PurposeInsightManager::class)
        ->call('edit', $insight->id)
        ->assertSet('isEditing', true)
        ->assertSet('existing_image', 'purpose-insights/to_be_removed.jpg')
        ->call('removeExistingImage')
        ->assertSet('existing_image', null)
        ->assertSet('remove_image', true)
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('isEditing', false);

    $insight->refresh();

    expect($insight->image)->toBeNull();
    expect(Storage::disk('public')->exists('purpose-insights/to_be_removed.jpg'))->toBeFalse();
});

it('can cancel editing mode and reset fields cleanly', function () {
    $insight = PurposeInsight::create([
        'title' => 'Another Test Article',
        'slug' => 'another-test-article',
        'category' => 'Redemption & Restoration',
        'opening_tip' => 'Opening tip',
        'content' => 'Full article body',
        'is_published' => true,
    ]);

    Livewire::test(PurposeInsightManager::class)
        ->call('edit', $insight->id)
        ->assertSet('isEditing', true)
        ->assertSet('title', 'Another Test Article')
        ->call('resetFields')
        ->assertSet('isEditing', false)
        ->assertSet('title', '')
        ->assertSet('insight_id', null);
});
