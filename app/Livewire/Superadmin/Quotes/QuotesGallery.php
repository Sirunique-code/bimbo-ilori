<?php

namespace App\Livewire\Superadmin\Quotes;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Quote;
use Illuminate\Support\Facades\Storage;

class QuotesGallery extends Component
{
    use WithFileUploads;

    public $quotes, $image;

    public function mount()
    {
        $this->quotes = Quote::all();
    }

    // Add a new quote
    public function addQuote()
    {
        $this->validate([
            'image' => 'required|image|max:2048', // Max 2MB file
        ]);

        // Store Image
        $path = $this->image->store('quotes', 'public');

        // Create Quote Record
        Quote::create(['image' => $path]);

        // Refresh the quotes list
        $this->quotes = Quote::all();

        // Reset form
        $this->image = null;

        // Flash message
        session()->flash('message', 'Quote added successfully!');
    }

    // Delete a quote
    public function deleteQuote($id)
{
    $quote = Quote::find($id);

    if ($quote) {
        Storage::disk('public')->delete($quote->image);
        $quote->delete();

        // ✅ Reset component data and re-run mount()
        $this->reset();
        $this->mount();

        session()->flash('message', 'Quote deleted successfully!');
    }
}


    public function render()
    {
        return view('livewire.superadmin.quotes.quotes-gallery')->layout('layouts.app');
    }
}
