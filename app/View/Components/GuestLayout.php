<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    public ?string $title;
    public ?string $description;
    public ?string $keywords;
    public ?string $image;
    public ?string $url;
    public ?string $type;
    public ?string $publishedTime;
    public ?string $author;
    public ?string $section;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $title = null,
        ?string $description = null,
        ?string $keywords = null,
        ?string $image = null,
        ?string $url = null,
        ?string $type = null,
        ?string $publishedTime = null,
        ?string $author = 'Bimbo Ilori',
        ?string $section = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->image = $image;
        $this->url = $url;
        $this->type = $type;
        $this->publishedTime = $publishedTime;
        $this->author = $author;
        $this->section = $section;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest');
    }
}
