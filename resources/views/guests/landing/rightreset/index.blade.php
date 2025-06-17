<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B9LPP4PFWS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B9LPP4PFWS');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RightReset | Bimbo Ilori</title>

    <meta name="description"
        content="Join Bimbo Ilori's Right Reset journey — reset your mind and align with your true path.">

    <!-- Open Graph for social media sharing -->
    <meta property="og:title" content="Right Reset | Bimbo Ilori">
    <meta property="og:description"
        content="Join the transformative journey with Bimbo Ilori to reset your mindset and purpose.">
    <meta property="og:image" content="{{ asset('assets/img/rightresetflyer3.jpg') }}">
    <meta property="og:url" content="{{ url('/rightreset') }}">
    <meta property="og:type" content="website">


    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" defer>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>

    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Include Laravel Echo and Pusher -->



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    @livewireStyles
</head>

<body>

    <!-- Hero Section -->
    <section class="section hero-section">
        <div class="container">
            <!-- Title -->
            <h1 class="section-title hero-title herotext-center">
                DISCOVER THE POWER OF A <span class="text-warning">RIGHT RESET</span>
            </h1>
            <h2 class="herosection-title  mb-4">THIS IS FOR <span class="text-warning">YOU</span></h2>

            <!-- Image -->
            <div class="hero-img">
                <img src="assets/img/course-33.jpg" alt="Bimbo Ilori" class="img-fluid shadow-lg">
            </div>

            <!-- Paragraphs -->
            <p class="lead herotext-center fw-bold text-white">
                Are you at a loss concerning what you can really do as a next-level venture or endeavor? Are you feeling
                stuck, overwhelmed, and disconnected?
            </p>
            <h3 class="text-center text-muted">OR</h3>
            <p class="lead herotext-center fw-bold text-white">
                Do you look around and it seems to you many people are already doing what you are thinking, and you are
                discouraged?
            </p>
            <div class="sub-container">
                <div class="text-box">
                    <p>
                        It’s time for a change—but not just any change. You need a Right Reset: an intentional,
                        transformative shift to realign your life, reignite your passion, and reset your path to
                        success.
                    </p>
                </div>
                <div class="text-box">
                    <p>
                        The RightReset Discovery and Clarity Masterclass is the breakthrough you’ve been waiting for —
                        interactive, insightful, and designed just for you.
                    </p>
                </div>
            </div>

            {{-- <!-- Button -->
            <div class="text-center pb-4" style="margin-top: 20px">
                <a href="#" class="btn btn-primary btn-lg mx-2">Learn More</a>
            </div> --}}
        </div>
    </section>

    <!-- Right Reset Masterclass Section -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">RightReset Masterclass with Coach Bimbo Ilori</h2>
            <p class="text-center " style="font-size: 23px">
                Join the Right Reset masterclass on <strong class="text-success"> June 28th, by 8pm, </strong> where
                you’ll unlock the tools, strategies, and inspiration to:
            </p>
            <div class="row mt-4">
                <div class="col-md-4 text-center master shadow">
                    <h4 class="masterh4">Clarify Your Next Steps</h4>
                    <p>Break free from confusion and uncover your hidden treasures.</p>
                </div>
                <div class="col-md-4 text-center master shadow">
                    <h4 class="masterh4">Renew Your Energy</h4>
                    <p>Overcome discouragement and burnout, tap into a deep well of motivation and focus.</p>
                </div>
                <div class="col-md-4 text-center master shadow">
                    <h4 class="masterh4">Release Limiting Patterns</h4>
                    <p>Identify and let go of habits and mindsets that no longer serve you.</p>
                </div>
            </div>
            <p class="mastertext-center text-center bg-second">
                Take Bold, Purpose-Driven Action: Step into your potential with confidence and clarity.
            </p>
            <p class="mastertext-center text-center bg-second">
                This isn’t just another course—it’s your moment to reset with intention and step into a life of
                purpose, balance, and fulfillment.
            </p>
            <div class="mastertext-center d-flex justify-content-center mt-4">
                <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="btn btn-primary">Join the Masterclass now with just
                    an investment of N15500
                    (Unlock bonuses worth 200k)</a>
            </div>
        </div>
    </section>


    <!-- Flyers Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Flyer 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/img/rightrestflyer1.jpg" alt="Flyer 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Discover Your Path</h5>
                        <p class="card-text">Clarify your next steps and uncover hidden opportunities. <br><strong
                                class="text-success">Date: 28th June, 2025. <br> Time: 8pm</strong> </p>
                    </div>
                </div>
            </div>
            {{-- <!-- Flyer 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assets/img/rightrestflyer3.jpg" alt="Flyer 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Release Limiting Patterns</h5>
                            <p class="card-text">Identify and let go of habits that no longer serve you.</p>
                        </div>
                    </div>
                </div> --}}
        </div>
    </section>


    <!-- Why You Need a Right Reset Section -->
    <section class="section why-section">
        <div class="container">
            <h2 class="whysection-title text-center">Why the Right Reset?</h2>
            <p class="lead text-center">
                "I know you have been looking forward to a break, a turnaround, a shift, and a change. This is it—your
                opportunity to embrace transformation, step into your power, and align with the path you were meant to
                walk. The moment you've been waiting for has arrived. Are you ready to take the leap?"
            </p>
            <p class="mastertext-center text-center bg-second">
                Unlike generic self-help programs, the Right Reset is tailored to meet you where you are, providing
                practical, actionable steps to align your mindset, habits, and goals. It’s not about starting over—it’s
                about starting right.
            </p>
            <div class="text-center mt-4">
                <a href="https://paystack.com/buy/rightreset-hxvysh" class="btn btn-primary">I'm Ready to Pay Now!</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">What others Have to Say</h2>
            <div class="row mt-4">
                <!-- Testimonial 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-card p-4 border rounded shadow-sm">
                        <div class="quote-icon">
                            <i class=" fas fa-quote-left "></i>
                        </div>
                        <p class="testimonial-text">
                            Her coaching has encouraged me to reflect on myself, helping me to understand my strengths
                            and areas where I could improve on, it has really helped in my personal growth.
                            It has given me a clear sense of purpose, helping me to focus on what truly matters. Her
                            mentoring has ensured, I stay on track and achieve my goals.

                        </p>
                        <div class="mt-3">
                            <strong>TEMI</strong>
                            <div class="rating-stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-card p-4 border rounded shadow-sm">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left "></i>
                        </div>
                        <p class="testimonial-text">
                            Coach BI has a unique ability to understand her client’s challenges and provide the right
                            support, encouragement, and practical strategies. With her coaching, I've gained greater
                            clarity, improved my mindset, and made significant progress in both my personal and
                            professional life.
                            If you're looking for a coach who will truly invested in your growth, I highly recommend
                            Coach BI. She is a game-changer!"

                        </p>
                        <div class="mt-3">
                            <strong>GRACE</strong>
                            <div class="rating-stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-card p-4 border rounded shadow-sm">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left "></i>
                        </div>
                        <p class="testimonial-text">
                            Working with Coach BI has been a transformative experience. Her guidance has helped me to
                            unlock my potential and break through personal barriers.

                        </p>
                        <div class="mt-3">
                            <strong>FUNMI</strong>
                            <div class="rating-stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="btn btn-primary">Be the Next Testifier!</a>
            </div>
        </div>
    </section>

    <!-- Bonuses Section 1 -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">What You Will Walk Away With</h2>
            <p class="text-center lead mb-4">In this masterclass, you will:</p>
            <ul class="list-unstyled bonus-list">
                <!-- Pre-Session Clarity Diagnostic -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Get a Pre-Session Clarity Diagnostic</strong> – A powerful self-assessment to uncover where
                    you truly are.
                </li>
                <!-- Pinpoint What’s Holding You Back -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Pinpoint What’s Holding You Back</strong> – Identify internal blocks and limiting beliefs
                    keeping you stuck.
                </li>
                <!-- Reclaim Your Focus and Energy -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Reclaim Your Focus and Energy</strong> – Learn simple, powerful strategies to reset your
                    priorities and regain momentum.
                </li>
                <!-- Clarity Guide Blueprint -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Get a Clarity Guide Blueprint</strong> – A guided tool to help you mentally declutter and
                    gain direction.
                </li>
                <!-- Break Through Fear and Doubt -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Break Through Fear and Doubt</strong> – Learn how to confront and conquer the invisible
                    barriers within.
                </li>
                <!-- Build Aligned Habits and Structures -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Build Aligned Habits and Structures (Anchors)</strong> – Practical systems to help you stay
                    focused and faithful to your goals.
                </li>
                <!-- Develop a Clear Action Plan -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Develop a Clear Action Plan</strong> – Leave with a tangible roadmap to help you move toward
                    your next breakthrough.
                </li>
                <!-- Create a Mission Statement -->
                <li class="bonus-item">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Create a Mission Statement</strong> – A compass to guide your decisions and actions.
                </li>
                <!-- Additional Bonus -->
                <li class="bonus-item accent-text">
                    <span class="check-icon"><i class="fas fa-check"></i></span>
                    <strong>Additional Bonus worth ₦200,000</strong>
                </li>
            </ul>
            <div class="text-center mt-4">
                <a href="https://paystack.com/buy/rightreset-hxvysh" class="btn btn-primary">Join Now for $10.00
                    (₦15,500.00)</a>
            </div>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section class="section why-section">
        <div class="container">
            <h2 class="section-title text-center">Register Now</h2>
            <p class="text-center lead mb-5">Secure your spot in the Right Reset Master Class by filling out the form
                below.</p>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <form id="registrationForm" action="{{ route('register.submit') }}" method="POST"
                        class="needs-validation" novalidate>
                        @csrf
                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                placeholder="Enter your first name" required>
                            <div class="invalid-feedback">Please enter your first name.</div>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                placeholder="Enter your last name" required>
                            <div class="invalid-feedback">Please enter your last name.</div>
                        </div>

                        <!-- WhatsApp Number -->
                        <div class="mb-3">
                            <label for="whatsappNumber" class="form-label">WhatsApp Number</label>
                            <input type="tel" class="form-control" id="whatsappNumber" name="whatsappNumber"
                                placeholder="Enter your WhatsApp number" required>
                            <div class="invalid-feedback">Please enter a valid WhatsApp number.</div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email address" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <!-- Submit -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Optional fallback for non-JS --}}
            @if (session('success'))
                <div class="alert alert-success text-center mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>



    <!-- Bonuses Section 2 -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">Bonuses</h2>
            <div class="row">
                <!-- Bonus 1 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bonus-card text-center p-4 border rounded shadow-sm">
                        <h1 class="bonus-number text-warning">1</h1>
                        <p class="bonus-text">
                            Access to my exclusive nurturing emails where I share insights on purpose and personal
                            development. Worth <strong class="text-success">N50,000</strong>.
                        </p>
                    </div>
                </div>
                <!-- Bonus 2 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bonus-card text-center p-4 border rounded shadow-sm">
                        <h1 class="bonus-number text-warning">2</h1>
                        <p class="bonus-text">
                            A bonus gift for further clarity on your reset. Leverage
                            my expertise and experience. Worth <strong class="text-success">N50,000</strong>.
                        </p>
                    </div>
                </div>
                <!-- Bonus 3 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bonus-card text-center p-4 border rounded shadow-sm">
                        <h1 class="bonus-number text-warning">3</h1>
                        <p class="bonus-text">
                            Strategies that will help you stay on track and undistracted. Worth
                            <strong class="text-success">N50,000</strong>.
                        </p>
                    </div>
                </div>
                <!-- Bonus 4 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bonus-card text-center p-4 border rounded shadow-sm">
                        <h1 class="bonus-number text-warning">4</h1>
                        <p class="bonus-text">
                            A powerful tool to analyze your strengths and skills. Worth <strong
                                class="text-success">N50,000</strong>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="mastersection-title ">Don't miss the slot,
                    Register here!</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel Section with pictures-->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center text-dark">More testimonials from our clients</h2>
            <p class="text-center lead mb-5">Hear from those who have experienced transformative growth with Coach BI.
            </p>

            <!-- Carousel -->
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="assets/img/pristilla.jpg" alt="Pristilla" class="img-fluid shadow-lg"
                                    style="max-width: 300px;">
                            </div>
                            <div class="col-md-6 mt-4 px-3">
                                <p class="lead mb-4">
                                    "I was helped to develop leadership skills that include making good decisions,
                                    managing teams, and motivating others. These skills have made me a better leader,
                                    prepared for any challenge."
                                </p>
                                <strong>- Pristilla</strong>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="assets/img/damola.jpg" alt="Damola" class="img-fluid shadow-lg"
                                    style="max-width: 300px;">
                            </div>
                            <div class="col-md-6 mt-4 px-3">
                                <p class="lead mb-4">
                                    "My encounter with your training and the tasks given helped me develop targeted
                                    potentials I didn’t even know I had. As I diligently worked on the tasks, I
                                    discovered my abilities. Subsequently, I registered a startup with the CAC
                                    (Corporate Affairs Commission), and it is doing well. Thank you."
                                </p>
                                <strong>- Damola</strong>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="assets/img/joy.jpg" alt="Joy" class="img-fluid shadow-lg"
                                    style="max-width: 300px;">
                            </div>
                            <div class="col-md-6 mt-4 px-3">
                                <p class="lead mb-4">
                                    "I had a great and worthwhile time with you. It has served as a bedrock and
                                    foundation for my career. I'm always thankful to God for ordering my steps. The
                                    leadership was excellent."
                                </p>
                                <strong>- Joy</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text-center mt-4">
                <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="btn btn-primary">BE THE NEXT TESTIFIER, REGISTER
                    NOW!!!
                </a>
            </div>
        </div>
    </section>

    <!-- Meet Bimbo Ilori Section -->
    <section class="section meet-bimbo-section bg-dark-custom">
        <div class="container">
            <h2 class="section-title text-center">Meet the Convener – <span class="text-warning">Bimbo Ilori </span>
            </h2>
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="assets/img/introduction1.jpg" alt="Bimbo Ilori" class="img-fluid shadow-lg"
                        style="max-width: 350px;">
                </div>
                <h5 class="meet-title">Coach | Author | Purpose Strategist | Founder, ThriveForge</h5>
                <!-- Text Column -->
                <div class="col-md-6">
                    {{-- <p class="lead mb-4">
                        <strong>Variable-Synced<br>Vision-Aligned</strong><br>
                        Bimbo Ilori Programs (BIPs)
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="fas fa-check-circle me-2 accent-text"></i> KBloc Consults (consultation,
                            training)
                        </li>
                        <li><i class="fas fa-check-circle me-2 accent-text"></i> ThriveForge Online Courses and
                            Coaching
                            Program</li>
                        <li><i class="fas fa-check-circle me-2 accent-text"></i> Book Publications and Blogs</li>
                        <li><i class="fas fa-check-circle me-2 accent-text"></i> Kingswit International School</li>
                        <li><i class="fas fa-check-circle me-2 accent-text"></i> Podcasts and Teachings</li>
                    </ul> --}}
                    <p class="meet-subtitle">
                        I have seen many people constantly starting over — in relationships, in business, in purpose. It
                        wasn’t because they were lazy or lacked potential, but because they never paused long enough to
                        set right. They were doing a lot, but going nowhere fast. And that stirred something deep in
                        me.<br><br>

                        I’ve always believed that clarity is a gift — and one we don’t have to stumble into. I didn’t
                        come into alignment through chaos or confusion.

                    </p>
                    <p class="meet-subtitle">
                        I followed divine principles, embraced structure, and walked with God intentionally. That’s why
                        I know stability is possible, not just spiritually, but practically. <br><br>

                        That journey, one marked by structure, grace, and intentional obedience, is what fuels my
                        passion today. I’ve authored over 35 books, (on life purpose and personal development), built
                        multiple businesses, and coached countless individuals into alignment, not because I’m perfect,
                        but because I’m proof that you don’t need to crash to be course-correct.

                    </p>

                    <h5 class="meet-title">That’s why I created the Right Reset Masterclass.</h5>

                    <p class="meet-subtitle">
                        This isn’t just another event. It’s a divine pause — a sacred space to reassess where you are,
                        realign with who you’re becoming, and reset with intention. It’s for those who are tired of just
                        moving and are now ready to move right. For those who’ve achieved some progress but sense
                        there's another layer of clarity, depth, and destiny waiting. <br><br>

                        I believe that the right reset doesn’t take you backward — it repositions you forward. It clears
                        the fog. It redeems the time. It restores your focus.

                    </p>
                    <p class=" mastertext-center text-center bg-second">
                        So if you’re done with circling, and ready to step into your next with boldness, strategy, and
                        spiritual alignment, then welcome. You’re in the right place.

                    </p>
                    <div class="mastertext-center d-flex justify-content-center mt-4" style="margin-bottom: 20px;">
                        <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="btn btn-primary">Let’s reset — the right
                            way.</a>

                    </div>
                    <div class="text-center pb-4" style="margin-top: 30px">
                        <a href="https://paystack.com/buy/rightreset-hxvysh" class="btn btn-success btn-lg mx-2">Pay
                            Here</a>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="d-flex justify-content-center mt-2 text-white">

                        <a class="btn btn-social-icon btn-instagram me-3"
                            href="https://www.instagram.com/bimboilori_bi/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-facebook me-3"
                            href="https://www.facebook.com/bimbo.a.ilori?mibextid=ZbWKwL" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-linkedin me-3"
                            href="https://www.linkedin.com/in/bimbo-iiori" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a class="btn btn-social-icon btn-spotify me-3"
                            href="https://creators.spotify.com/pod/show/bimbo-ilori" target="_blank">
                            <i class="fab fa-spotify"></i>
                        </a>
                        <a class="btn btn-social-icon btn-globe" href="https://www.bimboilori.com" target="_blank">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>

                </div>


            </div>

        </div>
    </section>

    <!-- Convener Profile Section -->
    <section class="py-5" style="background-color: #FFC300">
        <div class="container">
            <h2 class="section-title text-center">What you'll gain from me</h2>
            <p class="text-center lead mb-5">Explore valuable insights and resources from Coach Bimbo Ilori.</p>
            <ul class="knowledge-base-list list-unstyled">
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Life Purpose and Personal
                        Development Coach with years of impactful coaching experience</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Author of over 35
                        transformational books, including Purpose Tiers and Built to Last</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Creator of the 5-V Anchors of
                        Purpose framework, helping hundreds discover and live out purpose</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Founder of ThriveForge and KBloc
                        Consults, equipping individuals and businesses for growth</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Masterclass Host and Conference
                        Speaker delivering practical, spirit-led strategies for success</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Coach to emerging and existing
                        leaders, helping them gain clarity, confidence, and lasting results</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Proven track record of turning
                        pain into purpose and principles into pathways</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Known for delivering deep,
                        relatable, and faith-based insights with actionable tools</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Featured on multiple media
                        platforms for inspiring personal and relationship transformations</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Trained over 2,000 individuals
                        directly through institutions and platforms—backed by powerful testimonials</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Cumulatively impacted over 10,000
                        people through teachings, books, and training resources</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Integrative Life Coach blending
                        faith, wisdom, and results-oriented coaching</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>A structure practitioner who
                        lends direction and organization to individuals and institutions</em></li>

                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Chartered Administrator and
                        Fellow of the Chartered Administrator Guild, (FCIA).</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>Certified Life Purpose Coach and
                        trained Counselor</em></li>
                <li><span class="check-icon"><i class="fas fa-check"></i></span> <em>A coach with a clear voice, a
                        deep sense of calling, and a commitment to helping others thrive</em></li>
            </ul>
            <div class=" mastertext-center d-flex justify-content-center mt-5">
                <a href="https://forms.gle/XZEtBHEztx31ayuJ6" class="btn btn-primary btn-lg">Yes, I Want to Register
                    for This Course</a>
            </div>
        </div>
    </section>

    <!-- Payment Section -->
    <section class="py-5 " style="background-color: #DE4A09">
        <div class="container">
            <h2 class="section-title text-center text-white">Bank Transfer</h2>
            <p class="text-center lead text-white mb-4">Make your payment now to secure your spot in the Right Reset
                Course.</p>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="payment-card p-5 text-center rounded shadow-lg" style="background-color: #ffffff;">
                        <!-- Bank Logo -->
                        <img src="assets/img/gtbank-logo.png" alt="GTBank Logo" class="mb-4"
                            style="max-width: 150px;">
                        <!-- Account Details -->
                        <h3 class="payment-title text-dark">Account Details</h3>
                        <p class="payment-text text-dark">Account Name: <br> <strong>
                                <h2>Abimbola Ilori</h2>
                            </strong></p>
                        <p class="payment-text text-dark">Account Number: <br> <strong>
                                <h2>0949179994</h2>
                            </strong> </p>
                        <p class="payment-text text-dark">Bank: <br> <strong>
                                <h2> GTBank</h2>
                            </strong></p>
                        <!-- Call-to-Action Button -->
                        <div class="mt-4">
                            <p>Send payment receipt to whatsapp:</p>
                            <a href="https://wa.me/2349028763627" class="btn btn-success btn-lg">Send Receipt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">FAQs</h2>
            <div class="accordion" id="faqAccordion">
                <!-- Question 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Who is this masterclass for?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            This masterclass is for anyone who feels stuck, overwhelmed, or uncertain about their next
                            steps. If you’re ready to break free from limitations, reset your mindset, and realign with
                            what truly matters to you, this session is for you. Whether you're navigating life
                            transitions, seeking clarity, or simply want a fresh start, Right Reset will guide you
                            toward renewed purpose and confidence.
                        </div>
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I access this masterclass?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Once you register, you’ll receive a confirmation email with all the details on how to join
                            the live session. If it’s a virtual event, you’ll get a private link for access. If it’s
                            in-person, we’ll provide venue details.
                        </div>
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Is there a refund policy?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Due to the nature of this masterclass and the immediate value you’ll receive, we do not
                            offer refunds. However, if you have any concerns, feel free to contact our support team, and
                            we’ll be happy to assist.
                        </div>
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Will there be a replay after the session?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! If you can’t attend live, don’t worry. A replay will be available for a limited time,
                            so you can revisit the session at your convenience. Details on how to access the replay will
                            be shared after the masterclass.
                        </div>
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How can I register for this masterclass?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can register by clicking <a href="https://forms.gle/XZEtBHEztx31ayuJ6"
                                class="text-decoration-underline">here</a>. Secure your spot now and take the first
                            step toward your reset!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Bimbo Ilori Programs. All rights reserved. <span class="text-dark"><a
                        href="https://bimboilori.com/">www.bimboilori.com</a></span></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/js/app.js'])

    <!-- Notification popup -->
    <div id="registration-notification"
        style="display:none; position:fixed; bottom:20px; right:20px; background:#28a745; color:white; padding:15px; border-radius:5px;">
        The <span id="registrant-name"></span> just registered for the RightReset MasterClass!
    </div>


    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            const form = this;

            // Client-side validation
            if (!form.checkValidity()) {
                form.classList.add('was-validated'); // Show validation feedback
                return;
            }

            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        const successDiv = document.createElement('div');
                        successDiv.className = 'alert alert-success text-center mt-3';
                        successDiv.textContent = data.success;

                        // Remove old success messages
                        const existingAlert = form.parentNode.querySelector('.alert-success');
                        if (existingAlert) existingAlert.remove();

                        // Insert after form
                        form.parentNode.appendChild(successDiv);

                        form.reset();
                        form.classList.remove('was-validated'); // Remove Bootstrap validation class

                        setTimeout(() => successDiv.remove(), 5000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
        });
    </script>

    <script>
        window.onload = function() {
            if (typeof Echo === 'undefined') {
                console.error("❌ Echo is NOT loaded!");
            } else {
                console.log("✅ Echo is loaded!");

                window.Echo.channel('registration-channel')
                    .listen('.new-registration', (e) => {
                        console.log("📩 Received event:", e);
                        const el = document.getElementById('registration-notification');
                        const nameSpan = document.getElementById('registrant-name');

                        nameSpan.textContent = e.fullName;
                        el.style.display = 'block';

                        setTimeout(() => {
                            el.style.display = 'none';
                        }, 5000);
                    });
            }
        }
    </script>
    @livewireScripts

</body>

</html>
