<x-app-layout>
    <div class="container">
        <h1 class="mt-4 mb-3">Add New Course</h1>

        <form wire:submit.prevent="store" enctype="multipart/form-data">
            @csrf

            <!-- Course Title -->
            <div class="mb-3">
                <label class="form-label">Course Title</label>
                <input type="text" class="form-control" wire:model.defer="course_title" required>
                @error('course_title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Course Description -->
            <div class="mb-3">
                <label class="form-label">Course Description</label>
                <textarea class="form-control" wire:model.defer="course_description" rows="5"></textarea>
                @error('course_description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Course Price (USD) -->
            <div class="mb-3">
                <label class="form-label">Price (USD)</label>
                <input type="number" class="form-control" wire:model.defer="course_price_usd" step="0.01" required>
                @error('course_price_usd') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Course Price (NGN) -->
            <div class="mb-3">
                <label class="form-label">Price (NGN)</label>
                <input type="number" class="form-control" wire:model.defer="course_price_ngn" required>
                @error('course_price_ngn') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Course Duration -->
            <div class="mb-3">
                <label class="form-label">Duration</label>
                <input type="text" class="form-control" wire:model.defer="course_duration" required>
                @error('course_duration') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Course Image -->
<div class="mb-3">
    <label class="form-label">Course Image</label>
    <input type="file" class="form-control" wire:model="course_image" accept="image/*">
    @error('course_image') <span class="text-danger">{{ $message }}</span> @enderror

    <!-- Preview Selected Image -->
    @if ($course_image)
        <p class="mt-2">Image Preview:</p>
        <img src="{{ $course_image->temporaryUrl() }}" alt="Image Preview" style="max-width: 200px;">
    @endif
</div>


            <!-- Registration Link -->
            <div class="mb-3">
                <label class="form-label">Registration Link</label>
                <input type="url" class="form-control" wire:model.defer="register_link">
                @error('register_link') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Course</button>
        </form>
    </div>    
</x-app-layout>
