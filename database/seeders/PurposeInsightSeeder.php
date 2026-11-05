<?php

namespace Database\Seeders;

use App\Models\PurposeInsight;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class PurposeInsightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insight = PurposeInsight::firstOrCreate(
            ['slug' => 'navigating-pivotal-seasons-with-wisdom'],
            [
                'title' => 'Navigating Pivotal Seasons with Wisdom & Divine Alignment',
                'category' => 'Purpose & Personal Discovery',
                'opening_tip' => 'When a season shifts, clarity does not arrive through panic—it emerges through deliberate stillness, evaluation of values, and intentional alignment with your core assignment.',
                'content' => "Every human life moves in seasons. Yet, one of the greatest struggles people face is attempting to harvest summer fruit in the dead of winter, or maintaining outdated routines when God has already declared a new horizon.\n\nTo navigate a pivotal season effectively, you must embrace three critical principles:\n\n1. Stillness Before Strategy\nWhen transitions happen, our first instinct is often overactivity. We scramble to fix, build, or control. But wisdom whispers: be still. Discern what has truly ended so you can welcome what is opening.\n\n2. Realign with Core Assignment\nNot every opportunity is your assignment. Seasons of shift require severe pruning of good distractions so the great mission can thrive.\n\n3. Seek Accountable Counsel\nWalk with mentors and spiritual fathers who have navigated deep waters before you. Their perspective will save you years of trial and error.\n\nRemember: You were not created to drift aimlessly. Step boldly into the season ahead with courage, conviction, and purpose.",
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ]
        );

        // Seed sample comments with question, feedback, and author response
        if ($insight->comments()->count() === 0) {
            $c1 = $insight->comments()->create([
                'name' => 'Emmanuel Adekunle',
                'email' => 'emmanuel@example.com',
                'type' => 'question',
                'comment' => "How do you distinguish between a season of pruning and a season where you're simply in the wrong environment entirely?",
                'is_approved' => true,
                'admin_reply' => "A season of pruning produces inner fruit, humility, and deeper reliance on God, even while stripping away comfort. Being in the wrong environment, however, constantly drains your virtue without producing spiritual or personal growth. Pray for discernment to know the difference.",
                'admin_replied_at' => now()->subDay(),
            ]);

            $c2 = $insight->comments()->create([
                'name' => 'Chidinma Okafor',
                'email' => 'chidinma@example.com',
                'type' => 'feedback',
                'comment' => "This post spoke directly to what I have been experiencing over the last three months. Principle #1 (Stillness Before Strategy) was a profound reminder. Thank you, Bimbo Ilori!",
                'is_approved' => true,
            ]);

            $c3 = $insight->comments()->create([
                'name' => 'Pastor Segun Williams',
                'email' => 'segun@example.com',
                'type' => 'comment',
                'comment' => "Such profound and timely truth for leaders. We are sharing this with our church leadership academy this weekend.",
                'is_approved' => true,
            ]);
        }
    }
}
