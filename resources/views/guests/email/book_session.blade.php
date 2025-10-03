<x-guest-layout>

     <!-- KBLOC: Consults and Training Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- KBLOC Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded fixed-height" src="{{ asset('assets/img/kbloc.jpg') }}"
                        alt="KBloc Consults">
                </div>
                <!-- KBLOC Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary px-3">Consults and Training</h6> --}}
                    <h2 class="mb-4">KBloc Consults And Training</h2>
                    <p>Kingswitbloc (KBloc) is our registered brand for Consult Services, that channels my skills and
                        expertise as a Chartered Administrator and entrepreneur with ample years of experience.</p>
                    <p>This intertwines with the capacity development propensity, to support businesses alignment,
                        improvement, direction, and better positioning.</p>
                    <p>Your business or startup stands to gain immense insight and strength from this service. Take
                        advantage of the opportunity now!</p>
                    <a href="https://forms.gle/G8iiparxyrnPRgUz8" class="btn btn-primary mt-3">REQUEST FOR CONSULTS /
                        TRAINING HERE</a>
                </div>
            </div>
        </div>
    </div>



<section>
<div class="container mx-auto py-8 max-w-2xl">
    <!-- Title -->
    <h1 class="text-3xl font-bold mb-4">Book a One-on-One Session with Bimbo Ilori</h1>

    <!-- Intro Text -->
    <p class="mb-4">
        Whether you're navigating purpose, growth, or transitions, you're not alone.
        These sessions are designed to bring clarity, confidence, and progress—powered by faith and guided by experience.
    </p>
    <p class="mb-4">
        Select a session below that best fits your current need. Once booked, you’ll receive an email confirmation with your Zoom link and further instructions.
    </p>


     <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Book a Session</h6>
                <h1 class="mb-5">BIPs Clarity and Strategy Sessions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <a class="course-card d-block position-relative" href="https://paystack.com/buy/30-minutes-clarity-session-kmreom">
                        <img src="assets/img/session-30.jpg" alt="Personal Growth">
                        <div class="course-info">
                            <h5 class="m-0">30 Minutes Clarity Session</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                    <a class="course-card d-block position-relative" href="https://paystack.com/buy/book-a-60-minutes-clarity-session-coypfu">
                        <img src="assets/img/session-60.jpg" alt="Mindset & Motivation">
                        <div class="course-info">
                            <h5 class="m-0">60 Minutes Clarity Session</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <a class="course-card d-block position-relative" href="">
                        <img src="assets/img/session-90.jpg" alt="Goal Setting & Success">
                        <div class="course-info">
                            <h5 class="m-0">30 Minutes Clarity Session</h5>
                        </div>
                    </a>
                </div>
                <!-- View More Button -->
                
            </div>
        </div>
    </div>



    <p class="mb-4">
        After payment, proceed to book your session. You’ll be asked to upload your proof of payment during the booking process.
    </p>
    <p class="mb-8">
        For questions or help, email:
        <a href="mailto:contact@bimboilori.com" class="text-blue-600 underline">contact@bimboilori.com</a>
        or WhatsApp:
        <a href="https://wa.me/+2349028763627" class="text-blue-600 underline">+2349028763627</a>
    </p>

    <!-- Booking Form -->
    <form id="session-form" enctype="multipart/form-data">
 
    @csrf
      

    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" wire:model="name" required>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" id="email" name="email" class="form-control" wire:model="email" required>
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" id="phone" name="phone" class="form-control" wire:model="phone" required>
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="session_type" class="form-label">Session Type</label>
        <select id="session_type" name="session_type" class="form-control" wire:model="session_type" required>
            <option value="">-- Select Session Type --</option>
            <option value="30 Minutes Clarity Session">30 Minutes Clarity Session</option>
            <option value="60 Minutes Clarity Session">60 Minutes Clarity Session</option>
            <option value="90 Minutes Deep Dive Strategy Session">90 Minutes Deep Dive Strategy Session</option>
        </select>
        @error('session_type') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="preferred_date" class="form-label">Preferred Date</label>
        <input type="date" id="preferred_date" name="preferred_date" class="form-control" wire:model="preferred_date" required>
        @error('preferred_date') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="preferred_time" class="form-label">Preferred Time</label>
        <input type="time" id="preferred_time" name="preferred_time" class="form-control" wire:model="preferred_time" required>
        @error('preferred_time') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="payment_proof" class="form-label">Upload Proof of Payment (PDF/JPG/PNG) | not more than 2MB</label>
        <input type="file" id="payment_proof" name="payment_proof" class="form-control" wire:model="payment_proof" accept=".pdf,.jpg,.jpeg,.png" required>
        @error('payment_proof') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="notes" class="form-label">Additional Notes (Optional)</label>
        <textarea id="notes" name="notes" class="form-control" wire:model="notes"></textarea>
    </div>

        <div id="form-loader" style="display:none; margin-top:1rem;">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Submitting...</span>
    </div>
    <span style="margin-left: 10px;">Submitting...</span>
    </div>

    <button type="submit" class="btn btn-primary">Submit Booking</button>
    <div id="form-message" style="margin-bottom: 1rem;"></div>
</form>


<script>
    document.getElementById('session-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const messageDiv = document.getElementById('form-message');
        const loaderDiv = document.getElementById('form-loader');

        // Show loader
        loaderDiv.style.display = 'flex';
        messageDiv.innerHTML = ''; // Clear previous messages

        fetch("{{ route('session.store') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error("Network response was not ok.");
            return response.json();
        })
        .then(data => {
            form.reset();
            messageDiv.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
        })
        .catch(error => {
            console.error(error);
            messageDiv.innerHTML = `<div class="alert alert-danger">An error occurred. Please try again.</div>`;
        })
        .finally(() => {
            // Hide loader
            loaderDiv.style.display = 'none';
        });
    });
</script>

</div>
</section>
</x-guest-layout>

