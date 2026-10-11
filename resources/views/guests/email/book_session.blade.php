<x-guest-layout>

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
    <div class="course-card d-block position-relative">
        <img src="assets/img/session-30.jpg" alt="Personal Growth">
        <div class="course-info text-center p-3">
            <h5 class="m-0">30 Minutes Clarity Session</h5>
            <a href="https://paystack.com/buy/30-minutes-clarity-session-kmreom" class="btn btn-primary mt-3">
                Book Now
            </a>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
    <div class="course-card d-block position-relative">
        <img src="assets/img/session-60.jpg" alt="Mindset & Motivation">
        <div class="course-info text-center p-3">
            <h5 class="m-0">60 Minutes Clarity Session</h5>
            <a href="https://paystack.com/buy/book-a-60-minutes-clarity-session-coypfu" class="btn btn-primary mt-3">
                Book Now
            </a>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
    <div class="course-card d-block position-relative">
        <img src="assets/img/session-90.jpg" alt="Goal Setting & Success">
        <div class="course-info text-center p-3">
            <h5 class="m-0">90 Minutes Clarity Session</h5>
            <a href="https://paystack.com/buy/90-minutes-deep-dive-strategy-session-skbvfw" class="btn btn-primary mt-3">
                Book Now
            </a>
        </div>
    </div>
</div>

              
                
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

