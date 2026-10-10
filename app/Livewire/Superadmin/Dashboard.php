<?php

namespace App\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Book;
use App\Models\Course;
use App\Models\Testimonial;
use App\Models\Quote;
use App\Models\PurposeInsight;
use App\Models\NewsletterSubscriber;

class Dashboard extends Component
{
    public $totalBooks;
    public $totalCourses;
    public $totalTestimonials;
    public $totalQuotes;
    public $totalInsights;
    public $totalSubscribers;

    public function mount()
    {
        $this->totalBooks = Book::count();
        $this->totalCourses = Course::count();
        $this->totalTestimonials = Testimonial::count();
        $this->totalQuotes = Quote::count();
        $this->totalInsights = PurposeInsight::count();
        $this->totalSubscribers = NewsletterSubscriber::count();
    }

    public function render()
    {
        return view('livewire.superadmin.dashboard')
            ->layout('layouts.app');
    }
}
