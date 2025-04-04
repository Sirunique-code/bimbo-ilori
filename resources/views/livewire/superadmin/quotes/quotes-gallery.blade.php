<div class="container mt-5">
    <h4 class="text-primary text-center mb-4">Quotes Gallery</h4>

    <!-- Success Message -->
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <!-- Add Quote Form -->
    <div class="mb-4">
        <input type="file" wire:model="image" class="form-control mb-2">
        <button wire:click="addQuote" class="btn btn-primary">Upload Quote</button>
        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Display Quotes -->
    <div class="row g-3">
        @foreach($quotes as $quote)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="position-relative">
                    <img class="img-fluid bg-light p-1 rounded" src="{{ asset('storage/' . $quote->image) }}" alt="Quote">
                    <button wire:click="deleteQuote({{ $quote->id }})" class="btn btn-danger btn-sm position-absolute top-0 end-0">
                        X
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

