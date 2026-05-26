<x-guest-layout>
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-white"> 🎁 TAKE ADVANTAGE OF THE BOOKS BY BI FREE GIVEAWAY 🎁</h2>
                <p class="lead">Enter your email to receive a free copy of <strong>"The Art of Asking Well"</strong>!
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-dark shadow-sm">
                        <img src="{{ asset('assets/img/The-art-of-asking-well.jpg') }}" alt="Purpose Tiers"
                            class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">The Art of Asking Well</h5>
                            <p class="card-text">
                                Learn how to make your requests irrestibible and position yourself for results.
                            </p>

                            <!-- Flash Messages -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
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
                                    <input type="text" name="firstName" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="secondName" class="form-control"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mt-2 w-100">
                                    📥 Get Free eBook
                                </button>
                            </form>

                              <!-- Social Media Section -->
                            <div class="pt-4 mt-3 border-top">
                                <p class="fw-bold mb-2 text-dark">Connect with Bimbo Ilori</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-outline-dark btn-social mx-1" href="https://www.instagram.com/bimboilori_bi" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-social mx-1" href="https://www.facebook.com/bimbo.a.ilori?mibextid=ZbWKwL" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-social mx-1" href="https://open.spotify.com/show/7iwYHW0a9gsFQeNRIQOErH?si=bOyVq0sWRaiPa5xlvjtrNA" target="_blank">
                                        <i class="fab fa-spotify"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-social mx-1" href="https://www.linkedin.com/in/bimbo-iiori" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
