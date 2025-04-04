<?php

namespace App\Livewire\Superadmin\Books;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookManager extends Component
{
    use WithFileUploads;

    public $books, $title, $category, $description, $image, $amazon_link, $selar_link, $paystack_link;
    public $bookId; // For editing
    public $showForm = false; // Toggle form visibility
    public $isEditMode = false; // Differentiate between create & update

    public function render()
    {
        $this->books = Book::all();
        return view('livewire.superadmin.books.book-manager')->layout('layouts.app');
    }

    public function showCreateForm()
    {
        $this->resetInputFields();
        $this->isEditMode = false;
        $this->showForm = true;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:1024', // Max 1MB
            'amazon_link' => 'required|url',
            'selar_link' => 'required|url',
            'paystack_link' => 'required|url',
        ]);

        $imagePath = $this->image->store('books', 'public');

        Book::create([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'image' => $imagePath,
            'amazon_link' => $this->amazon_link,
            'selar_link' => $this->selar_link,
            'paystack_link' => $this->paystack_link,
        ]);

        session()->flash('message', 'Book added successfully!');
        $this->resetInputFields();
        $this->showForm = false;
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $this->bookId = $book->id;
        $this->title = $book->title;
        $this->category = $book->category;
        $this->description = $book->description;
        $this->amazon_link = $book->amazon_link;
        $this->selar_link = $book->selar_link;
        $this->paystack_link = $book->paystack_link;
        $this->isEditMode = true;
        $this->showForm = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'amazon_link' => 'required|url',
            'selar_link' => 'required|url',
            'paystack_link' => 'required|url',
        ]);

        $book = Book::findOrFail($this->bookId);

        if ($this->image) {
            // Delete old image
            Storage::disk('public')->delete($book->image);
            $imagePath = $this->image->store('books', 'public');
            $book->image = $imagePath;
        }

        $book->update([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'amazon_link' => $this->amazon_link,
            'selar_link' => $this->selar_link,
            'paystack_link' => $this->paystack_link,
        ]);

        session()->flash('message', 'Book updated successfully!');
        $this->resetInputFields();
        $this->showForm = false;
        $this->isEditMode = false;
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        Storage::disk('public')->delete($book->image); // Delete stored image
        $book->delete();
        session()->flash('message', 'Book deleted successfully!');
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->category = '';
        $this->description = '';
        $this->image = '';
        $this->amazon_link = '';
        $this->selar_link = '';
        $this->paystack_link = '';
        $this->bookId = null;
    }
}
