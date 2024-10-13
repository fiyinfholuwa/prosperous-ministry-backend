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



@if(count($events) > 0)

<section class="section courses" id="courses" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h6>Latest Events</h6>
                </div>
            </div>
        </div>
        <div class="row event_box">
            @foreach($events as $event)

            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                <a href="{{route('event.detail', $event->slug)}}">
                <div class="events_item">
                    <div class="thumb">
                        <img src="{{asset($event->image)}}" alt="">
                        <span class="category">{{$event->start_date}}</span>
                        <span class="price"><h6><em>{{$event->time}}</em></h6></span>
                    </div>
                    <div class="down-content">
                        <h4>{{$event->title}}</h4>
                    </div>
                </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endif





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

</body>
</html>
