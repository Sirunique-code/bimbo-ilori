<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h2>Manage Testimonial Images</h2>
        <button class="btn btn-primary" wire:click="showCreateForm">Add Testimonial Image</button>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if ($showForm)
        <div class="card p-4 mb-4">
            <h4>Add Testimonial Image</h4>

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" class="form-control" wire:model="image">
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" width="100">
                    @endif
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-success">Upload</button>
                <button type="button" class="btn btn-secondary" wire:click="resetInputFields">Cancel</button>
            </form>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td><img src="{{ asset('storage/' . $testimonial->image) }}" width="100"></td>
                    <td>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $testimonial->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
