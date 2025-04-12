<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Book Details</h6>
                <h1 class="mb-5">{{ $book->title }}</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="book-item bg-light">
                        <div class="position-relative overflow-hidden text-center">
                            <img class="img-fluid" src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->title }}" style="max-height: 400px; width: auto;">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-3">{{ $book->title }}</h5>
                        </div>

                        <div class="p-4">
                            {{$book->description }}  <!-- Display full description -->
                        </div>

                        <div class="text-center pb-4">
                            <a href="{{ $book->paystack_link }}" class="btn btn-success btn-lg mx-2">Pay Here</a>
                            <a href="{{ $book->amazon_link }}" class="btn btn-primary btn-lg mx-2">Register Here</a>
                            <a href="{{ route('books.index') }}" class="btn btn-secondary btn-lg mx-2">Go back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
