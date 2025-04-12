<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bimbo Ilori Programs | RightReset Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="keywords"
        content="Life Purpose, Coaching, Personal Development, Leadership, Books, Programs, Bimbo Ilori">
    <meta name="description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs. Discover your purpose, grow in leadership, and achieve personal success.">

    <!-- Open Graph Meta Tags (For Social Media) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bimbo Ilori Programs | Life Purpose Coaching & Personal Development">
    <meta property="og:description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs. Discover your purpose, grow in leadership, and achieve personal success.">
    <meta property="og:image" content="{{ asset('assets/img/featured-image.jpg') }}">
    <meta property="og:url" content="http://bimboilori.com">
    <meta property="og:site_name" content="Bimbo Ilori Programs">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bimbo Ilori Programs | Life Purpose Coaching & Personal Development">
    <meta name="twitter:description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs.">
    <meta name="twitter:image" content="{{ asset('assets/img/featured-image.jpg') }}">
    <meta name="twitter:site" content="@yourtwitterhandle">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" defer>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
        }

        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        /* Section Base Styling */
        .section {
            padding: 60px 20px;
        }

        .btn {
            --bs-btn-color: #fff;
        }

        .d-flex .btn {
            color: #ffffff;
        }

        .d-flex .btn1 {
            color: #0b0404;
        }


        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgb(55, 0, 53)), url('assets/img/rightresethero.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
        }

        .herosection-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            color: #d8d8d8;
            /* Purple for emphasis */
        }

        .hero-title {
            color: #f8f9fa
        }

        .hero-img img {
            width: 400px;
            border-radius: 12px;
            border: 10px solid #ffffff;
            /* White border */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Enhanced shadow */
        }

        /* Highlight "RIGHT RESET" in Yellow */
        .text-warning {
            color: #FFC300;
            /* Yellow */
        }

        /* Bold Paragraphs */
        .lead.fw-bold {
            margin-top: 20px;
            font-weight: 700;
            /* Extra bold */
            font-size: 1.25rem;
            line-height: 1.6;
            color: #ffffff;
        }

        .herotext-center {
            color: #FFC300;
            /* Purple accent color */
        }

        .sub-container {
            background-color: rgba(255, 230, 0, 0.1);
            padding: 15px;
        }

        .text-box {
            background-color: #ffffff;
            /* White background for text boxes */
            border-radius: 10px;
            /* Rounded corners */
            padding: 20px;
            /* Padding inside the text box */
            margin: 20px auto;
            /* Margin around the text box */
            max-width: 90%;
            /* Responsive width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            color: #0b0404;
        }

        .text-box p {
            font-size: 1.2rem;
            /* Font size */
            line-height: 1.6;
            /* Line height for readability */
            text-align: center;
            /* Center-aligned text */
        }

        .transparency-note {
            text-align: center;
            font-size: 0.8rem;
            /* Smaller font size for the note */
            color: #ffffff;
            /* White text for visibility */
            margin-top: 20px;
            /* Space above the note */
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            color: #ffffff;
            /* Purple for emphasis */
        }

        /* Section Titles */
        .mastersection-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            color: #5F185A
                /* Purple for emphasis */
        }

        .mastertext-center {
            margin-top: 20px;
            font-weight: 700;
            /* Extra bold */
            font-size: 1.25rem;
            line-height: 1.6;
            color: #000000;
        }

        .masterh4 {
            font-size: 2rem;
            font-weight: 700;
            color: #5F185A;
        }

        .bg-second {
            background-color: #FFC300;
            padding: 20px;
            border-radius: 5px;

        }

        .master {
            padding: 30px;
        }

        .mastertext-center .btn {
            background-color: #5F185A;
            color: #ffffff
        }

        .p {
            font-size: 2rem;
            font-weight: 700;
        }

        /* Buttons */
        .btn-primary {
            background-color: #FFC300;
            /* Orange */
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
            font-weight: 600;
            /* Semi-bold */
            color: #000;
            /* Black text for contrast */
        }

        .btn-primary:hover {
            background-color: #e0b000;
            /* Slightly darker orange on hover */
        }

        /* Flyers Section */
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for cards */
            transition: transform 0.3s ease-in-out;
            /* Smooth hover effect */
        }

        .card:hover {
            transform: translateY(-10px);
            /* Slight lift on hover */
        }

        .card-img-top {
            height: 400px;
            /* Fixed height for consistency */
            object-fit: cover;
            /* Ensure images are not stretched */
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #5F185A;
            /* Purple for emphasis */
        }

        .card-text {
            font-size: 1rem;
            color: #333;
            /* Dark gray for readability */
        }

        /* Why Section*/


        .why-section {
            background-color: #5F185A;
            color: #ffffff
        }

        .whysection-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            color: #ffffff;
            /* Purple for emphasis */
        }

        /* Testimonials Section */
        .testimonial-card {
            background-color: #ffffff;
            /* White background */
            border: 1px solid #e0e0e0;
            /* Light gray border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        .quote-icon {
            font-size: 2rem;
            color: #5F185A !important;
            /* Primary color (blue) */
            margin-bottom: 10px;
        }


        .testimonial-text {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
            /* Dark gray text */
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rating-stars i {
            font-size: 1.2rem;
            margin-right: 2px;
        }

        .rating-stars i:last-child {
            margin-right: 0;
        }


        /* Accent Text */
        .accent-text {
            color: #5F185A;
            /* Purple accent color */
        }

        /* Bonuses Section */
        .bonus-card {
            background-color: #ffffff;
            /* White background */
            border: 1px solid #e0e0e0;
            /* Light gray border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            transition: transform 0.3s ease-in-out;
        }

        .bonus-card:hover {
            transform: translateY(-5px);
            /* Slight lift effect on hover */
        }

        .bonus-number {
            font-size: 4rem;
            /* Very large number */
            font-weight: 700;
            /* Bold weight */
            color: #FFC300;
            /* Orange for emphasis */
            margin-bottom: 10px;
        }

        .bonus-title {
            font-size: 1.25rem;
            font-weight: 600;
            /* Semi-bold */
            color: #8E24AA;
            /* Purple for emphasis */
            margin-bottom: 10px;
        }

        .bonus-text {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #333;
            /* Dark gray for readability */
        }


        /* Meet Bimbo Ilori Section */
        .meet-bimbo-section {
            background-color: #f8f9fa;
        }

        .meet-title {
            margin-top: 10px;
            font-size: 1.25rem;
            font-weight: 500;
            color: #FFC300;
            /* Purple for emphasis */
        }

        .meet-subtitle {
            font-size: 1.05rem;
            font-weight: 600;
            color: #ffffff;
            /* Purple for emphasis */
        }

        .meet-bimbo-section .accent-text {
            color: #ffee00;
        }

        /* Rounded Circle Image */
        .img-fluid.rounded-circle {
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Dark Background Sections */
        .bg-dark-custom {
            background-color: #1c1c1c;
            color: #fff;
        }

        /* Footer */
        .footer {
            background-color: #f8f9fa;
            padding: 30px 0;
            text-align: center;
        }

        /* Accordion Styling */
        .accordion-button {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            /* Dark gray text */
            background-color: #f8f9fa;
            /* Light gray background */
            border: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            /* Remove focus outline */
        }

        .accordion-button:not(.collapsed) {
            background-color: #FFC300;
            /* Orange when expanded */
            color: #000;
            /* Black text for contrast */
        }

        .accordion-body {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.6;
            color: #363636;
            /* Slightly lighter gray text */
            background-color: #f3f3f3
        }

        /* Hover Effect for Links */
        .text-decoration-underline {
            text-decoration: underline;
            color: #8E24AA;
            /* Purple for emphasis */
        }

        .text-decoration-underline:hover {
            color: #5d115d;
            /* Darker purple on hover */
        }

        .bonus-item{
            font-size: 1.3rem;
            font-weight: 500;
            line-height: 1.6;
            color: #363636;
            /* Slightly lighter gray text */
            background-color: #f3f3f3;
            margin-top: 10px;
        }
    </style>
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
                <img src="assets/img/rightrestflyer3.jpg" alt="Bimbo Ilori" class="img-fluid shadow-lg">
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
                        This RightResets discovery and clarity interactive, unveiling webinar is what you need.
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
            <p class="text-center lead">
                Join the Right Reset masterclass, where you’ll unlock the tools, strategies, and inspiration to:
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
                <a href="https://forms.gle/R3qvMEErc3Jt7LK47" class="btn btn-primary">Join the course Now</a>
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
                            <p class="card-text">Clarify your next steps and uncover hidden opportunities.</p>
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
            <h2 class="mastersection-title text-center">What Our Students Have to Say</h2>
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
                <a href="https://forms.gle/R3qvMEErc3Jt7LK47" class="btn btn-primary">Be the Next Testifier!</a>
            </div>
        </div>
    </section>

    <!-- Bonuses Section 1 -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="mastersection-title text-center">What You Will Walk Away With</h2>
            <ul class="list-unstyled">
                <li class="bonus-item">✅ Identify what’s holding you back and discover how to move past limiting
                    beliefs.</li>
                <li class="bonus-item">✅ Reclaim your focus and energy by learning proven strategies to realign your
                    priorities.</li>
                <li class="bonus-item">✅ Gain clarity on your true purpose and what drives you.</li>
                <li class="bonus-item">✅ Overcome doubt, fear, and obstacles that hold you back.</li>
                <li class="bonus-item">✅ Create a mission statement that serves as your compass.</li>
                <li class="bonus-item">✅ Build habits and structures that keep you aligned with your goals.</li>
                <li class="bonus-item">✅ Sustain long-term momentum while making a meaningful impact.</li>
                <li class="bonus-item">✅ Craft a clear action plan to reset your path and achieve your next big
                    breakthrough.</li>
                <li class="bonus-item">✅ A crystal-clear action plan to realign with your purpose.</li>
                <li class="bonus-item accent-text">✅ Additional Bonus worth ₦250,000</li>
            </ul>
            <div class="text-center mt-4">
                <a href="https://paystack.com/buy/rightreset-hxvysh" class="btn btn-primary">Join Now for $10.00
                    (₦15,500.00)</a>
            </div>
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
                            A live Questions & Answers session with Coach BI for further clarity on your reset. Leverage
                            my expertise and experience. Worth <strong class="text-success">N100,000</strong>.
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
                            A powerful tool to analyze your strengths and skills. Worth <strong class="text-success">N50,000</strong>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://forms.gle/R3qvMEErc3Jt7LK47" class="mastersection-title ">Don't miss out on this BIG offer!</a>
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
                            You can register by clicking <a href="https://forms.gle/R3qvMEErc3Jt7LK47"
                                class="text-decoration-underline">here</a>. Secure your spot now and take the first
                            step toward your reset!
                        </div>
                    </div>
                </div>
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
                        <a href="https://forms.gle/R3qvMEErc3Jt7LK47" class="btn btn-primary">Let’s reset — the right
                            way.</a>
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
                        <a class="btn btn-social-icon btn-spotify"
                            href="https://creators.spotify.com/pod/show/bimbo-ilori" target="_blank">
                            <i class="fab fa-spotify"></i>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <div class="text-center pb-4" style="margin-top: 30px">
        <a href="https://paystack.com/buy/rightreset-hxvysh" class="btn btn-success btn-lg mx-2">Pay Here</a>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Bimbo Ilori Programs. All rights reserved. <span class="text-dark"><a
                        href="www.bimboilori.com">www.bimboilori.com</a></span></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
