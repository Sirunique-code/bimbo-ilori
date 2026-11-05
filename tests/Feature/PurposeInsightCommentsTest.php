<?php

use App\Models\Comment;
use App\Models\PurposeInsight;
use App\Models\User;
use App\Livewire\Superadmin\Comments\CommentManager;
use Livewire\Livewire;

it('renders comments section on purpose insight show page', function () {
    $insight = PurposeInsight::create([
        'title' => 'Walking in Divine Purpose',
        'slug' => 'walking-in-divine-purpose',
        'category' => 'Faith Development',
        'opening_tip' => 'Every season has purpose.',
        'content' => 'Full article content here.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $response = $this->get(route('purpose-insight.show', $insight->slug));

    $response->assertOk();
    $response->assertSee('Reader Questions &amp; Feedback', false);
    $response->assertSee('Leave Your Reflection or Question');
    $response->assertSee('Post Contribution');
});

it('allows a reader to submit a comment, question, or feedback', function () {
    $insight = PurposeInsight::create([
        'title' => 'The Power of Resilience',
        'slug' => 'the-power-of-resilience',
        'category' => 'Overcoming Obstacles & Resilience',
        'opening_tip' => 'Resilience is a muscle.',
        'content' => 'Full article on resilience.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $response = $this->post(route('purpose-insight.comments.store', $insight->slug), [
        'name' => 'Grace Johnson',
        'email' => 'grace@example.com',
        'type' => 'question',
        'comment' => 'How can one balance emotional healing with career demands during tough seasons?',
    ]);

    $response->assertRedirect(route('purpose-insight.show', $insight->slug) . '#comment-1');

    $this->assertDatabaseHas('comments', [
        'purpose_insight_id' => $insight->id,
        'name' => 'Grace Johnson',
        'email' => 'grace@example.com',
        'type' => 'question',
        'is_approved' => true,
    ]);

    // Check that comment displays on the public page
    $pageResponse = $this->get(route('purpose-insight.show', $insight->slug));
    $pageResponse->assertSee('Grace Johnson');
    $pageResponse->assertSee('Question');
    $pageResponse->assertSee('How can one balance emotional healing with career demands during tough seasons?');
});

it('validates required fields on comment submission', function () {
    $insight = PurposeInsight::create([
        'title' => 'Leadership Fundamentals',
        'slug' => 'leadership-fundamentals',
        'category' => 'Leadership & Influence',
        'opening_tip' => 'Leadership is service.',
        'content' => 'Full article on leadership.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $response = $this->post(route('purpose-insight.comments.store', $insight->slug), [
        'name' => '',
        'email' => 'invalid-email',
        'comment' => '',
    ]);

    $response->assertSessionHasErrors(['name', 'email', 'comment']);
    $this->assertDatabaseCount('comments', 0);
});

it('rejects spam submissions when honeypot field is filled', function () {
    $insight = PurposeInsight::create([
        'title' => 'Healthy Boundaries',
        'slug' => 'healthy-boundaries',
        'category' => 'Relationships, Love & Emotional Wholeness',
        'opening_tip' => 'Boundaries protect clarity.',
        'content' => 'Full article content.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $response = $this->post(route('purpose-insight.comments.store', $insight->slug), [
        'website_hp' => 'http://spambot.com',
        'name' => 'Bot Spammer',
        'email' => 'bot@spambot.com',
        'comment' => 'Buy cheap links here!',
    ]);

    // Should redirect back without saving to database
    $this->assertDatabaseCount('comments', 0);
});

it('renders author response when comment has admin reply', function () {
    $insight = PurposeInsight::create([
        'title' => 'Parenting with Intent',
        'slug' => 'parenting-with-intent',
        'category' => 'Parenting & Child Development',
        'opening_tip' => 'Every child needs affirmation.',
        'content' => 'Full article content.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $comment = $insight->comments()->create([
        'name' => 'David Okafor',
        'email' => 'david@example.com',
        'type' => 'question',
        'comment' => 'At what age should intentional values coaching begin?',
        'is_approved' => true,
        'admin_reply' => 'Values coaching begins from early formative years through observational learning.',
        'admin_replied_at' => now(),
    ]);

    $response = $this->get(route('purpose-insight.show', $insight->slug));
    $response->assertOk();
    $response->assertSee('Author Response');
    $response->assertSee('Bimbo Ilori');
    $response->assertSee('Values coaching begins from early formative years through observational learning.');
});

it('allows superadmin to manage, reply, toggle, and delete comments via Livewire', function () {
    $user = User::factory()->create();

    $insight = PurposeInsight::create([
        'title' => 'Navigating Career Shifts',
        'slug' => 'navigating-career-shifts',
        'category' => 'Business & Entrepreneurship',
        'opening_tip' => 'Clarity comes through motion.',
        'content' => 'Full article content.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $comment = $insight->comments()->create([
        'name' => 'Sarah Connor',
        'email' => 'sarah@example.com',
        'type' => 'feedback',
        'comment' => 'This insight helped me rethink my transition strategy!',
        'is_approved' => true,
    ]);

    Livewire::actingAs($user)
        ->test(CommentManager::class)
        ->assertSee('Sarah Connor')
        ->assertSee('This insight helped me rethink my transition strategy!')
        // Test author reply
        ->call('startReply', $comment->id)
        ->set('replyText', 'Thank you Sarah, so glad this resonated with you!')
        ->call('saveReply')
        ->assertSee('Author reply saved and published.');

    $comment->refresh();
    expect($comment->admin_reply)->toBe('Thank you Sarah, so glad this resonated with you!');
    expect($comment->admin_replied_at)->not->toBeNull();

    // Test toggle status
    Livewire::actingAs($user)
        ->test(CommentManager::class)
        ->call('toggleStatus', $comment->id);

    $comment->refresh();
    expect($comment->is_approved)->toBeFalse();

    // Test delete
    Livewire::actingAs($user)
        ->test(CommentManager::class)
        ->call('delete', $comment->id);

    expect(Comment::find($comment->id))->toBeNull();
});
