<x-guest-layout>
    <div class="container my-5">
        <style>
            .about-image {
                width: 450px; /* Fixed width */
                height: 400px; /* Fixed height */
                object-fit: cover; /* Ensures images fit nicely without distortion */
                border-radius: 10px; /* Optional: Adds rounded corners */
            }
        </style>

        <!-- Introduction Section -->
        <section class="row align-items-center my-5">
            <div class="col-md-6">
                <h2 class="fw-bold">My Journey to Becoming a Life Purpose Coach</h2>
                <p>
                    I was a bright and outspoken child—always eager to read, write, and express my thoughts. My parents nurtured me with love, education, and good values. That foundation mattered.
                </p>
                <p>
                    From childhood, I gravitated toward storytelling and communication. I loved crafting words, engaging in presentations, and standing confidently before audiences. I was never the shy one! (Laughs.)
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/introduction.jpg') }}" class="about-image shadow" alt="Bimbo Ilori">
            </div>
        </section>

        <!-- A Path of Structure and Strategy -->
        <section class="row align-items-center my-5 bg-light p-4">
            <div class="col-md-6 order-md-2">
                <h2 class="fw-bold">A Path of Structure and Strategy</h2>
                <p>
                    I studied BSc Accounting and later secured a position with the Federal Ministry of Education, where I was deployed to the classroom. But I was never just a teacher—I was a builder, a systems thinker.
                </p>
                <p>
                    While my colleagues focused on lesson plans, I was drawn to policies, records, and documentation. I started organizing files for the school clubs under my oversight, creating structured frameworks that improved efficiency.
                </p>
            </div>
            <div class="col-md-6 order-md-1 text-center">
                <img src="{{ asset('assets/img/strategy.jpg') }}" class="about-image shadow" alt="Teaching and Leadership">
            </div>
        </section>

        <!-- The Awakening -->
        <section class="row align-items-center my-5">
            <div class="col-md-6">
                <h2 class="fw-bold">The Awakening: From Organization to Life Transformation</h2>
                <p>
                    As I built structures in organizations, I started encountering individuals who sought my help—not just for administrative support but for personal clarity, organization of thoughts, and direction in life.
                </p>
                <p>
                    People came to me feeling stuck, confused, and uncertain. They didn’t just need systems; they needed clarity of purpose.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/awakening.jpg') }}" class="about-image shadow" alt="Coaching">
            </div>
        </section>

        <!-- Building a Legacy -->
        <section class="row align-items-center my-5 bg-light p-4">
            <div class="col-md-6 order-md-2">
                <h2 class="fw-bold">Building a Legacy of Purpose and Impact</h2>
                <p>
                    Over time, my writings became the foundation of my published works, leading to over 35 book titles under the generic term LPPD Books (Life Purpose and Personal Development). These books have been transformational for many.
                </p>
                <p>
                    Today, as an impact entrepreneur, I lead a holistic ecosystem of purpose-driven platforms.
                </p>
            </div>
            <div class="col-md-6 order-md-1 text-center">
                <img src="{{ asset('assets/img/legacy.jpg') }}" class="about-image shadow" alt="Books and Writing">
            </div>
        </section>

        <!-- The 5-V Anchors of Purpose -->
        <section class="text-center my-5">
            <h2 class="fw-bold">The 5-V Anchors of Purpose</h2>
            <p>At the core of my work is a structured framework:</p>
            <div class="row">
                <div class="col-md-4">
                    <h4>✔ Virtue-Derived</h4>
                    <p>A purpose rooted in values.</p>
                </div>
                <div class="col-md-4">
                    <h4>✔ Value-Driven</h4>
                    <p>A life that creates impact.</p>
                </div>
                <div class="col-md-4">
                    <h4>✔ Variable-Synced</h4>
                    <p>Purpose that evolves with growth.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <h4>✔ Vessel-Sacred</h4>
                    <p>Recognizing yourself as a channel for impact.</p>
                </div>
                <div class="col-md-6">
                    <h4>✔ Vision-Aligned</h4>
                    <p>Living in harmony with your true calling.</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center my-5 bg-light p-4">
            <h2 class="fw-bold">Are You Seeking Clarity & Purpose?</h2>
            <p>If you're feeling stuck, uncertain, or struggling with direction, I’m here to help.</p>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="http://amazon.com/author/bimboilori" class="btn btn-primary">Explore My Books</a>
                <a href="https://selar.co/m/abimbola-ilori1" class="btn btn-success">Buy on Selar</a>
                <a href="https://paystack.shop/bimboiloribooks" class="btn btn-warning">Buy on Paystack</a>
                <a href="{{ route('contact.index')}}" class="btn btn-dark">More about Bimbo Ilori</a>
            </div>
        </section>
    </div>
</x-guest-layout>
