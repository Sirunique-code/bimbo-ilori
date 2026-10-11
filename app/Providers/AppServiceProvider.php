<?php

namespace App\Providers;


use Livewire\Livewire;
use App\Http\Livewire\ContactForm;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Livewire::component('contact-form', ContactForm::class);
    }
}

