<x-app-layout>
        <div class="container mt-5">
            <div class="d-flex justify-content-between mb-4">
                <h2>Manage Books</h2>
                <button class="btn btn-primary" wire:click="showCreateForm">Add Book</button>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <!-- Book Form -->
            @if ($showForm)
                <div class="card p-4 mb-4">
                    <h4>{{ $isEditMode ? 'Edit Book' : 'Add Book' }}</h4>

                    <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" wire:model="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" wire:model="category">
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" wire:model="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" wire:model="image">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="100">
                            @elseif ($isEditMode)
                                <img src="{{ asset('storage/' . $image) }}" width="100">
                            @endif
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Amazon Link</label>
                            <input type="url" class="form-control" wire:model="amazon_link">
                        </div>

                        <div class="mb-3">
                            <label>Selar Link</label>
                            <input type="url" class="form-control" wire:model="selar_link">
                        </div>

                        <div class="mb-3">
                            <label>Paystack Link</label>
                            <input type="url" class="form-control" wire:model="paystack_link">
                        </div>

                        <button type="submit" class="btn btn-success">{{ $isEditMode ? 'Update' : 'Add' }}</button>
                        <button type="button" class="btn btn-secondary" wire:click="resetInputFields">Cancel</button>
                    </form>
                </div>
            @endif

            <!-- Books List -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->category }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" wire:click="edit({{ $book->id }})">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $book->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
