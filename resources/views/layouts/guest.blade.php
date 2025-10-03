<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G38XVXDHPV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G38XVXDHPV');
    </script>

    <meta charset="utf-8">
    <title>Bimbo Ilori Programs | Life Purpose Coaching, Books & Self Development Mastery.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="keywords"
        content="Life Purpose, Coaching, Personal Development, Leadership, Books, Programs, Bimbo Ilori">
    <meta name="description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs. Discover your purpose, grow in leadership, and attain fulfillment.">

    <!-- Open Graph Meta Tags (For Social Media) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bimbo Ilori Programs | Life Purpose Coaching, Books & Self Development Mastery.">
    <meta property="og:description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs. Discover your purpose, grow in leadership, and attain fulfillment.">
    <meta property="og:image" content="{{ asset('assets/img/featured-image.jpg') }}">
    <meta property="og:url" content="http://bimboilori.com">
    <meta property="og:site_name" content="Bimbo Ilori Programs">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="Bimbo Ilori Programs | Life Purpose Coaching, Books & Self Development Mastery.">
    <meta name="twitter:description"
        content="Transform your life with Bimbo Ilori’s coaching, books, and online programs.">
    <meta name="twitter:image" content="{{ asset('assets/img/featured-image.jpg') }}">
    <meta name="twitter:site" content="@yourtwitterhandle">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Bimbo Ilori Programs",
          "url": "https://www.bimboliori.com",
          "logo": "https://bimboilori.com/assets/img/bi-logo-mini-full2.png",
          "sameAs": [
            "https://www.facebook.com/bimbo.a.ilori?mibextid=ZbWKwL",
            "https://www.instagram.com/bimboilori_bi/"
          ]
        }
        </script>

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" loading="lazy">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin loading="lazy">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet" loading="lazy">

    <!-- Icon Font Stylesheet -->
    <!-- Font Awesome 6.4+ CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" defer>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @livewireStyles

        <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '715959051286003');
fbq('track', 'PageView');
fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2236429676815546&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <div class="container-fluid">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-3">
            <img src="{{ asset('assets/img/bi-logo-full2.png') }}" alt="Bimbo Ilori Logo" class="me-2" height="25">
        </a>
        <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('welcome') }}"
                    class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('about*') ? 'active' : '' }}">About BI</a>

                <!-- Programs Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('courses*') ? 'active' : '' }}" data-bs-toggle="dropdown">Programs</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('courses') }}" class="dropdown-item">Coaching</a>
                        <a href="{{ route('kbloc') }}" class="dropdown-item">Consults</a>
                        <a href="{{ route('courses') }}" class="dropdown-item">Podcasts</a>
                        <a href="{{ route('calendar') }}" class="dropdown-item">Upcoming Events</a>
                    </div>
                </div>

                <a href="{{ route('books.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('books*') ? 'active' : '' }}">Books by BI</a>
                <a href="{{ route('testimonials.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('testimonials*') ? 'active' : '' }}">Testimonials</a>
                <a href="{{ route('contact.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">Contact Us</a>
            </div>
            <a href="{{ url('/book-session') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                BOOK A SESSION <i class="fa fa-arrow-right ms-3"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

    <p class="text-left mt-3 mb-0 fst-italic" style="color:  #E4B548; font-size: 0.6rem; padding-left: 4.3rem;">
        ...Transforming Lives, Translating Purpose...
    </p>




    <!-- Navbar End -->


    {{ $slot }}


    @livewireScripts

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+2349028763627" target="_blank" class="whatsapp-float-button">
        <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WhatsApp">
    </a>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">



                <!-- Contact Info -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-globe me-2"></i> <a href="https://bimboilori.com"
                            class="text-light text-decoration-none">bimboilori.com</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-2"></i> <a href="tel:+2349028763627"
                            class="text-light text-decoration-none">+234 902 876 3627</a></p>
                    <p class="mb-3"><i class="fa fa-envelope me-2"></i> <a href="mailto:iloribimbo59@gmail.com"
                            class="text-light text-decoration-none">iloribimbo59@gmail.com</a></p>

                    <div class="d-flex pt-3">
                        <a class="btn btn-outline-light btn-social me-2"
                            href="https://www.instagram.com/bimboilori_bi"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social me-2"
                            href="https://www.facebook.com/bimbo.a.ilori?mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social me-2"
                            href="https://creators.spotify.com/pod/show/bimbo-ilori"><i
                                class="fab fa-spotify"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/bimbo-iiori"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <form id="newsletter-form" action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <div class="position-relative" style="max-width: 100%;">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5 rounded" type="email"
                                name="email" placeholder="Enter your email" required>
                            <button type="submit"
                                class="btn btn-primary position-absolute top-0 end-0 mt-2 me-2 px-4">Sign Up</button>
                        </div>
                    </form>
                    <div id="message-container" class="mt-2"></div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-4 col-md-12">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('welcome') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('welcome') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> Home
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('about.index') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('about.index') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> About BI
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('courses') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('courses') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> Programs
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('books.index') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('books.index') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> Books by BI
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('testimonials.index') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('testimonials.index') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> Testimonials
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}"
                                class="text-light text-decoration-none {{ request()->routeIs('contact.index') ? 'active-link' : '' }}">
                                <i class="fa fa-angle-right me-2"></i> Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Copyright -->
        <div class="container">
            <div class="text-center py-3 border-top">
                <p class="fst-italic" style="font-size: 0.7rem; color:#E4B548;">...Principles, Purpose, Progress...
                </p>
                <p class="mb-0">&copy; <a class="text-light text-decoration-none"
                        href="https://bimboilori.com">bimboilori.com</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Newsletter JS -->
    <script>
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                })
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(data => {
                    const msg =
                        `<div class="alert alert-${data.success ? 'success' : 'danger'}">${data.message || 'An error occurred.'}</div>`;
                    document.getElementById('message-container').innerHTML = msg;
                    if (data.success) form.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('message-container').innerHTML =
                        `<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>`;
                });
        });
    </script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top" style="display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Show the button when scrolling down
        window.addEventListener('scroll', function() {
            const button = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                button.style.display = 'inline-flex';
            } else {
                button.style.display = 'none';
            }
        });

        // Scroll to top on click
        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>






</body>

</html>
