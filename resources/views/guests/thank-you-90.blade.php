<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container text-center">

            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Thank You!</h6>
            </div>

            <!-- Hero Section -->
          <section class="bg-primary text-white py-5 mb-5"
    style="background: linear-gradient(135deg, #fc9fff, #fffbab);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mt-4">
                    <i class="fas fa-heart text-white" style="font-size: 4rem;"></i>
                </div>
                <h1 class="display-4 mb-3">Thank You!</h1>
                <p class="lead mb-4 text-dark">
                    Your payment for the <strong>90-minute session with Bimbo Ilori</strong> was successful.
                    Please complete the form below to confirm your booking.
                </p>

                <!-- New Calendar Link Button -->
                <div class="mt-4">
                    <a href="https://calendar.app.google/fjh51TnRp7eAnKnQA" 
                       target="_blank" 
                       class="btn btn-lg btn-success shadow">
                        📅 Reserve Your Spot on the Calendar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


            <form id="booking-form" action="{{ route('thank-you.submit') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <!-- Evidence of Payment -->
                <div class="mb-3">
                    <label for="payment_proof" class="form-label">Evidence of Payment</label>
                    <input type="file" id="payment_proof" name="payment_proof" class="form-control"
                        accept=".pdf,.jpg,.jpeg,.png" required>
                </div>

                <!-- Preferred Date -->
                <div class="mb-3">
                    <label for="preferred_date" class="form-label">Book a Date</label>
                    <input type="date" id="preferred_date" name="preferred_date" class="form-control" required>
                </div>

                <!-- Preferred Time -->
                <div class="mb-3">
                    <label for="preferred_time" class="form-label">Preferred Time</label>
                    <input type="time" id="preferred_time" name="preferred_time" class="form-control" required>
                </div>

                <div id="form-loader" style="display:none; margin-top:1rem;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Submitting...</span>
                    </div>
                    <span style="margin-left: 10px;">Submitting... you will be redirected to our official whatsapp account</span>
                </div>

                <button type="submit" class="btn btn-primary">Confirm Booking</button>
                <div id="form-message" style="margin-top:1rem;"></div>
            </form>

        </div>
    </div>
    </div>
    </section>

    <!-- Appreciation -->
    <section class="bg-light py-5">
        <div class="container">
            <p class="mb-0">
               We're eager to see you in session. <br>
                <strong>With appreciation, <br>Bimbo Ilori</strong>
            </p>
        </div>
    </section>
    </div>
    </div>

  <script>
    document.getElementById('booking-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const messageDiv = document.getElementById('form-message');
        const loaderDiv = document.getElementById('form-loader');

        loaderDiv.style.display = 'flex';
        messageDiv.innerHTML = '';

        fetch("{{ route('thank-you.submit') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    // Let browser set Content-Type for FormData
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

                // ✅ Redirect to WhatsApp after 1.5 seconds (optional delay)
                setTimeout(() => {
                    window.location.href = data.whatsapp_url;
                }, 1500); // Delay gives user time to see success message
            })
            .catch(error => {
                console.error('Error:', error);
                messageDiv.innerHTML =
                    `<div class="alert alert-danger">An error occurred. Please try again.</div>`;
            })
            .finally(() => {
                loaderDiv.style.display = 'none';
            });
    });
</script>
</x-guest-layout>
