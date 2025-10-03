<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">We’d Love to Hear From You</h1>
            </div>
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">We are delighted to connect with you. Send us a message, and we'll respond as soon
                        as possible.</p>

                    <p class="mb-4">You can use the contact form to:</p>
                    <ul class="mb-4 ps-4">
                        <li>Share your feedback from any of the books by BI.</li>
                        <li>Send in testimonials consequent to your interaction with the Bimbo Ilori Programs.</li>
                        <li>Share feedback from the courses or Masterclasses.</li>
                        <li>Give your thoughts on the podcast on Spotify.</li>
                        <li>Enquire about ongoing promotions on BIPs.</li>
                        <li>Ask questions concerning BIPs.</li>
                    </ul>

                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0"><a href="mailto:iloribimbo59@gmail.com"
                                    class="text-dark">iloribimbo59@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Phone</h5>
                            <p class="mb-0"><a href="tel:+2349028763627" class="text-dark">+234 902 876 3627</a></p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    @livewire('contact-form')
                </div>
            </div>

            <!-- Thank You Message -->
            <div class="text-center mt-5">
                <p class="fw-bold">Thank you for visiting us at <strong>bimboilori.com</strong>.</p>
                <p>We look forward to a rewarding partnership.</p>
            </div>
        </div>
    </div>

    <!-- Partner with BIPs Section -->
<section class="py-5 bg-light" id="partner">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">✨ Partner with BIPs</h2>
      <p class="text-muted">
        We invite you to collaborate with us in expanding reach and creating lasting transformation.
      </p>
    </div>

    <div class="row g-4">
      <!-- Opportunity 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title fw-bold">1. SOLT Podcasts Sponsorship</h5>
            <p class="card-text">
              Support spirit-led, life-enriching conversations for greater reach across digital platforms. 
              Your sponsorship will amplify our voice, enabling thousands more to access wisdom and hope.
            </p>
          </div>
        </div>
      </div>

      <!-- Opportunity 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title fw-bold">2. Publishing & Book Distribution Support</h5>
            <p class="card-text">
              Augment the production and wider circulation of Bimbo Ilori’s books, making them more accessible 
              at affordable or no cost.
            </p>
          </div>
        </div>
      </div>

      <!-- Opportunity 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title fw-bold">3. Sponsored Masterclass Slots</h5>
            <p class="card-text">
              Fund scholarships for individuals, parents, and leaders to access coaching and masterclasses. 
              With your support, participants who cannot afford it will gain transformative knowledge and tools.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Join Us -->
    <div class="text-center mt-5">
      <h4 class="fw-bold">🌍 Join Us</h4>
      <p class="text-muted">
        Together, we can inspire lives, strengthen families, empower organizations, 
        and raise tomorrow’s leaders.
      </p>

      <!-- Action Buttons -->
      <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-3">
        <a href="https://forms.gle/LRnbUccqqDvSdWjd6" target="_blank" 
           class="btn btn-primary btn-lg px-4">
          Fill Partnership Form
        </a>
        <button class="btn btn-outline-dark btn-lg px-4" data-bs-toggle="modal" data-bs-target="#donationModal">
          Make a Donation
        </button>
      </div>
    </div>
  </div>

 <!-- Donation Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow"> <!-- ✅ Added modal-content wrapper -->
      
      <div class="modal-header bg-primary text-white">
        <img src="assets/img/gtbank-seeklogo.svg" 
             alt="GTBank Logo" 
             style="height: 30px;" class="me-2">
        <h5 class="modal-title" id="donationModalLabel">One-Off Donation Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <p><strong>Bank:</strong> GTBank</p>
        <p><strong>Account Name:</strong> Kingswitbloc</p>
        <p>
          <strong>Account Number:</strong> 
          <span id="accountNumber">0598217241</span>
          <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyAccountNumber()">
            Copy
          </button>
        </p>
        <small class="text-muted">Use these details to make your support count.</small>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div> <!-- end modal-content -->
  </div>
</div>


<!-- Toast Notification -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
  <div id="copyToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        ✅ Account number copied to clipboard!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<!-- Copy Script -->
<script>
  function copyAccountNumber() {
    const accountNumber = document.getElementById("accountNumber").innerText;
    navigator.clipboard.writeText(accountNumber).then(() => {
      // Show toast
      const toastEl = document.getElementById("copyToast");
      const toast = new bootstrap.Toast(toastEl);
      toast.show();
    }).catch(err => {
      console.error("Error copying text: ", err);
    });
  }
</script>

</section>

</x-guest-layout>
