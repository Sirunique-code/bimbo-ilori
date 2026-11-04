@php
    $previewTitle = $book->title . ' | Books by Bimbo Ilori';
    $previewDescription = Str::limit(strip_tags($book->description), 200);
    $previewImage = $book->image_url;
@endphp

<x-guest-layout 
    :title="$previewTitle"
    :description="$previewDescription"
    :image="$previewImage"
    :url="route('books.show', $book->id)"
>
    <!-- Header Banner -->
    <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #180938 0%, #3F207F 60%, #25124D 100%);">
        <div class="container py-4 text-center">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                <i class="fa fa-bookmark me-1"></i> {{ $book->category }}
            </span>
            <h1 class="display-5 text-white fw-bold mb-2">{{ $book->title }}</h1>
            <p class="text-white-50 mb-0">By Bimbo Ilori &bull; Life Purpose &amp; Personal Development (LPPD) Library</p>
        </div>
    </div>

    <!-- Main Detail Section -->
    <div class="container-xxl py-3 pb-5">
        <div class="container">
            <div class="mb-4">
                <a href="{{ route('books.index') }}" class="btn btn-outline-primary rounded-pill px-4" style="color: #3F207F; border-color: #3F207F;">
                    <i class="fa fa-arrow-left me-2"></i> Back to All Books
                </a>
            </div>

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
                <div class="row g-0">
                    <!-- Left: Book Cover Image -->
                    <div class="col-lg-5 p-4 p-md-5 d-flex align-items-center justify-content-center" style="background: linear-gradient(180deg, #f8f6ff 0%, #ede7f6 100%);">
                        <div class="position-relative text-center">
                            @if($book->is_bundle)
                                <div class="position-absolute top-0 start-50 translate-middle-x badge bg-danger px-3 py-2 rounded-pill shadow-sm fw-bold">
                                    <i class="fa fa-gift me-1"></i> Special Value Bundle Pack
                                </div>
                            @endif
                            <img src="{{ $book->image_url }}" alt="{{ $book->title }}" class="img-fluid rounded-3 shadow-lg" style="max-height: 480px; width: auto; object-fit: contain;">
                        </div>
                    </div>

                    <!-- Right: Info & Purchase Options -->
                    <div class="col-lg-7 p-4 p-md-5 d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge bg-light text-dark border px-3 py-1 rounded-pill mb-3">
                                {{ $book->category }}
                            </span>
                            <h2 class="fw-bold mb-3 text-dark" style="color: #2b1559 !important;">{{ $book->title }}</h2>

                            <div class="mb-4 text-secondary lh-lg fs-6" style="white-space: pre-line;">
                                {{ $book->description }}
                            </div>
                        </div>

                        <!-- Purchase CTAs -->
                        <div class="p-4 rounded-3 border bg-light mt-4">
                            <h6 class="fw-bold text-dark mb-3">
                                <i class="fa fa-shopping-bag text-primary me-2"></i> Available Purchase Options
                            </h6>
                            <div class="d-flex flex-wrap gap-2">
                                @if (!empty($book->bookpaystackdigital_link))
                                    <a href="{{ $book->bookpaystackdigital_link }}" target="_blank" class="btn btn-primary rounded-pill px-3 py-2 fw-semibold" style="background-color: #3F207F; border-color: #3F207F;">
                                        <i class="fa fa-download me-1"></i> Paystack (Digital Edition)
                                    </a>
                                @endif
                                @if (!empty($book->bookpaystack_link))
                                    <a href="{{ $book->bookpaystack_link }}" target="_blank" class="btn btn-warning rounded-pill px-3 py-2 fw-semibold text-dark">
                                        <i class="fa fa-book me-1"></i> Paystack (Paperback Edition)
                                    </a>
                                @endif
                                @if (!empty($book->bookamazon_link))
                                    <a href="{{ $book->bookamazon_link }}" target="_blank" class="btn btn-dark rounded-pill px-3 py-2 fw-semibold">
                                        <i class="fab fa-amazon me-1"></i> Buy on Amazon
                                    </a>
                                @endif
                                @if (!empty($book->bookselar_link))
                                    <a href="{{ $book->bookselar_link }}" target="_blank" class="btn btn-success rounded-pill px-3 py-2 fw-semibold">
                                        <i class="fa fa-shopping-cart me-1"></i> Buy on Selar
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
