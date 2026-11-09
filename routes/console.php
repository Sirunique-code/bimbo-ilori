<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('newsletter:clean-spam', function () {
    $deleted = \App\Models\NewsletterSubscriber::where(function ($query) {
        $query->where('email', 'like', '%formtests%')
              ->orWhere('email', 'like', '%mailinator%')
              ->orWhere('email', 'like', '%tempmail%')
              ->orWhere('email', 'like', '%guerrillamail%')
              ->orWhere('email', 'like', '%yopmail%')
              ->orWhere('email', 'like', '%10minutemail%')
              ->orWhere('email', 'like', '%trashmail%')
              ->orWhere('email', 'like', '%test.com%')
              ->orWhere('email', 'like', '%example.com%');
    })->delete();

    $this->info("Successfully deleted {$deleted} spam subscriber record(s) from database.");
})->purpose('Purge automated bot and fake email entries from newsletter subscribers');
