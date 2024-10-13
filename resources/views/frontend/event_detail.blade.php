<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Prosperous Ministry</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo-scholar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet " href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--

    TemplateMo 586 Scholar

    https://templatemo.com/tm-586-scholar

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
{{--<div id="js-preloader" class="js-preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <span class="dot"></span>--}}
{{--        <div class="dots">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('home')}}" class="logo">
                        <img style="height: 60px" src="{{asset('frontend/images/logo.svg')}}" alt="Homepage">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li ><a href="{{route('home')}}" class="active">Home</a></li>
                        <li ><a href="{{route('event')}}">Events</a></li>
                        <li ><a href="{{route('login')}}">Login</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner" id="top">
</div>
<style>
    .main-banner {
        background-color: #f5f5f5;
        padding: 100px 0;
        text-align: center;
    }

    .main-banner .container {
        max-width: 1140px;
        margin: 0 auto;
    }

    .header-text h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .header-text p {
        font-size: 1.125rem;
        color: white;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .header-text strong {
        font-weight: bold;
        color: #ffffff;
    }

    .banner-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .header-text h2 {
            font-size: 2rem;
        }

        .header-text p {
            font-size: 1rem;
            padding-top: 70px;
        }
    }

    @media (max-width: 576px) {
        .main-banner {
            padding: 40px 0;
        }

        .header-text h2 {
            font-size: 1.75rem;
        }

        .header-text p {
            font-size: 0.9rem;
        }
    }

</style>



<section id="services" class="s-services">
    <div class="container">
        <div class="row">
            <!-- Left column (8) -->
            <div class="left-column">
                <div class="tips-container2">
                    <img style="border-radius: 50px;" src="{{asset($event->image)}}" alt="" class="blog-banner">

                    <div class="tips-download"></div>

                    <div class="tips-process">
                        <h3 style="color:#7a6ad8; padding-bottom: 30px">{{ $event->title }}</h3>
                        {!! $event->body !!}
                    </div>

                    <!-- Event Details Section -->
                    <div class="event-details">
                        <h4 style="color: #7a6ad8; margin-top: 30px;">Event Details</h4>
                        <ul>
                            <li><strong>Address:</strong> {{ $event->address }}</li>
                            <li><strong>Start Date:</strong> {{ $event->start_date }}</li>
                            <li><strong>End Date:</strong> {{ $event->end_date }}</li>
                            <li><strong>Event Time:</strong> {{ $event->time }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right column (4) -->
            <div class="right-column">
                <div class="contact-us section" id="contact">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="contact-us-content">
                                    <form id="contact-form" action="{{route('attendance.save')}}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                                </fieldset>
                                            </div>
                                            <input type="hidden" value="{{$event->id}}" name="event_id">

                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                                                </fieldset>
                                            </div>

                                            <div class="form-group form-check">
                                                <input type="checkbox"  required>
                                                <p class="form-check-label"  style="color: black">Subscribe to newsletter</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="orange-button">Register</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Styles for layout and responsiveness -->
<style>
    .container {
        width: 96%;
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .left-column {
        flex: 0 0 66.66%; /* Equivalent to 8 columns */
        padding: 15px;
    }

    .right-column {
        flex: 0 0 33.33%; /* Equivalent to 4 columns */
        padding: 15px;
        border-radius: 8px;
    }

    .subscribe-form h3 {
        color: #b01e1e;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }


    .btn {
        background-color: #b01e1e;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #8b1717;
    }

    .event-details {
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .event-details h4 {
        color: #b01e1e;
        margin-bottom: 10px;
    }

    .event-details ul {
        list-style-type: none;
        padding: 0;
    }

    .event-details ul li {
        padding: 8px 0;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
        color: #333;
    }

    .event-details ul li:last-child {
        border-bottom: none;
    }

    @media (max-width: 991px) {
        .left-column, .right-column {
            flex: 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .form-control, .btn {
            width: 100%;
        }
    }
</style>

<style>
    .form-control {
        color: #fff; /* Input text color to white */
        background-color: #333; /* Optional: Change background to a dark color for contrast */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-control::placeholder {
        color: #bbb; /* Optional: Change placeholder color for better visibility */
    }
</style>





{{--<div class="contact-us section" id="contact">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6  align-self-center">--}}
{{--                <div class="section-heading">--}}
{{--                    <h6>Contact Us</h6>--}}
{{--                    <h2>Feel free to contact us anytime</h2>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="contact-us-content">--}}
{{--                    <form id="contact-form" action="" method="post">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <fieldset>--}}
{{--                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <fieldset>--}}
{{--                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <fieldset>--}}
{{--                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <fieldset>--}}
{{--                                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>Copyright @2024 Prosperous. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('frontend/assets/js/counter.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
