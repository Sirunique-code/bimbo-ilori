<x-guest-layout>
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-white"> 🎁 TAKE ADVANTAGE OF THE BOOKS BY BI FREE GIVEAWAY 🎁</h2>
                <p class="lead">Enter your email to receive a free copy of <strong>"Purpose Tiers"</strong>!</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-dark shadow-sm">
                        <img src="{{ asset('assets/img/The-art-of-asking-well.jpg') }}" alt="Purpose Tiers" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">The Art of Asking Well</h5>
                            <p class="card-text">
                              Learn how to make your requests irrestibible and position yourself for results.
                            </p>

                            <!-- Flash Messages -->
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if(session('success'))
                                <div class="alert alert-success">🎉 Thank you! Your download will start shortly...</div>
                                <script>
                                    window.onload = function() {
                                        window.location.href = "{{ route('ebook.download') }}";
                                    }
                                </script>
                            @endif

                            <!-- Email Form -->
                            <form method="POST" action="{{ route('ebook.request') }}">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name (optional)">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mt-2 w-100">
                                    📥 Get Free eBook
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
