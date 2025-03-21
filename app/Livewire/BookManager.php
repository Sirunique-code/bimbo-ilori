<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Book;

class BookManager extends Component
{
    use WithFileUploads;

    public $books;
    public $title, $category, $description, $image, $amazon_link, $selar_link, $paystack_link;
    public $editMode = false;
    public $selectedBook;

    protected $rules = [
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048', // 2MB max
        'amazon_link' => 'nullable|url',
        'selar_link' => 'nullable|url',
        'paystack_link' => 'nullable|url',
    ];

    public function mount()
    {
        $this->loadBooks();
    }

    public function loadBooks()
    {
        $this->books = Book::all();
    }

    public function addBook()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('books', 'public') : null;

        Book::create([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'image' => $imagePath,
            'amazon_link' => $this->amazon_link,
            'selar_link' => $this->selar_link,
            'paystack_link' => $this->paystack_link,
        ]);

        $this->resetFields();
        $this->loadBooks();
        session()->flash('message', 'Book added successfully!');
    }

    public function editBook($id)
    {
        $this->editMode = true;
        $this->selectedBook = Book::findOrFail($id);

        $this->title = $this->selectedBook->title;
        $this->category = $this->selectedBook->category;
        $this->description = $this->selectedBook->description;
        $this->amazon_link = $this->selectedBook->amazon_link;
        $this->selar_link = $this->selectedBook->selar_link;
        $this->paystack_link = $this->selectedBook->paystack_link;
    }

    public function updateBook()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('books', 'public') : $this->selectedBook->image;

        $this->selectedBook->update([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'image' => $imagePath,
            'amazon_link' => $this->amazon_link,
            'selar_link' => $this->selar_link,
            'paystack_link' => $this->paystack_link,
        ]);

        $this->resetFields();
        $this->loadBooks();
        $this->editMode = false;
        session()->flash('message', 'Book updated successfully!');
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        $this->loadBooks();
        session()->flash('message', 'Book deleted successfully!');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->category = '';
        $this->description = '';
        $this->image = null;
        $this->amazon_link = '';
        $this->selar_link = '';
        $this->paystack_link = '';
        $this->editMode = false;
    }

    public function render()
    {
        return view('livewire.book-manager');
    }
}
