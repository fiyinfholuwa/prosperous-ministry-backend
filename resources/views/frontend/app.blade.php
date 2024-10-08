<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTRIS Healthcare - Compassionate Home Care</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
</head>
<body>
<!-- Sticky Header -->
<header class="sticky-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('frontend/images/Logo5.png')}}" alt="AUTRIS Healthcare Logo" class="footer-logo">
            </a>


            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main Navigation Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('about')}}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('insights')}}"> Insights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('testimonials')}}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('resources')}}">Resources</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium px-3" href="{{route('contact')}}">Contact</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-uppercase fw-medium px-3" href="{{route('dashboard')}}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a style="color: red !important; " class="nav-link text-uppercase fw-medium px-3" href="{{route('logout')}}">Logout</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-medium px-3" href="{{route('login')}}">Login</a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search Bar, Social Icons, and Call Button in One Row -->
    <div class="bg-light py-2">
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <!-- Search Form -->
            <form class="d-flex mb-3 mb-lg-0">
                <input class="form-control rounded-pill border-0 shadow-sm me-2" type="search" placeholder="Search" aria-label="Search" style="width: 100%;">
                <button class="btn btn-primary rounded-pill" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <!-- Call Button and Social Media Icons -->
            <div class="d-flex align-items-center">
                <!-- Call Us Button -->
                <a href="tel:+1234567890" class="btn btn-outline-primary rounded-pill me-3 px-3 py-2">
                    <i class="fas fa-phone-alt me-2"></i> Call Us
                </a>

                <!-- Social Media Icons -->
                <a href="#" class="me-2" style="color: #1877F2;"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="me-2" style="color: #0077B5;"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="#" class="me-2" style="color: #C13584;"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="me-2" style="color: #FF0000;"><i class="fab fa-youtube fa-lg"></i></a>

            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-branding">
                <img src="{{asset('frontend/images/Logo5.png')}}" alt="AUTRIS Healthcare Logo" class="footer-logo">
                <p class="footer-description">Providing compassionate and professional home care services to improve the quality of life for our clients and their families.</p>
            </div>
            <div class="footer-links">
                <h5>Quick Links</h5>
                <nav aria-label="Quick Links">
                    <ul>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('insights')}}">Insights</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('resources')}}">Resources</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-contact">
                <h5>Contact Us</h5>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>Morristown, New Jersey 07960</li>
                    <li><i class="fas fa-phone"></i>1866-428-8747</li>
                    <li><i class="fas fa-envelope"></i>Info@autrishealthcare.com</li>
                </ul>
            </div>
            <div class="footer-social">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="newsletter">
                    <h6>Subscribe to Our Newsletter</h6>
                    <form aria-label="Subscribe to Newsletter">
                        <label for="newsletter-email" class="visually-hidden">Your email</label>
                        <input type="email" id="newsletter-email" placeholder="Your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <p>&copy; 2024 AUTRIS Healthcare. All rights reserved.</p>
            <div class="footer-legal">
                <a href="{{route('policy')}}">Privacy Policy</a>
                <a href="{{route('terms')}}">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    // Add any custom JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Example: Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });


</script>
<!-- Start of Tawk.to Script -->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66fe805337379df10df13216/1i992aiii';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!-- End of Tawk.to Script -->

<!-- Button Event Listener Script -->
<script>
    document.getElementById('liveChatBtn').addEventListener('click', function() {
        if (typeof Tawk_API !== 'undefined' && typeof Tawk_API.toggle === 'function') {
            Tawk_API.toggle();
        } else {
            console.log("Live chat is not loaded yet.");
        }
    });
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}";
    switch (type) {
        case 'info':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'success':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'warning':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'error':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #ff0000, #ff0000)"}
            }).showToast();
            break;
    }

    // Unset the session
    {{ Session::forget('message') }}
    {{ Session::forget('alert-type') }}
    @endif
</script>

</body>
</html>
