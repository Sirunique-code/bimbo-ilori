<?php

namespace App\Livewire\Superadmin;
use Livewire\Component;
use Carbon\Carbon;

class CurrentDate extends Component
{
    public $currentDate;

    // Initialize the current date when the component is mounted
    public function mount()
    {
        $this->currentDate = Carbon::now()->format('F j, Y'); // Example: October 25, 2023
    }

    // Optional: Refresh the date every time the component is re-rendered
    public function hydrate()
    {
        $this->currentDate = Carbon::now()->format('F j, Y');
    }

    public function render()
    {
        return view('livewire.superadmin.current-date');
    }
}