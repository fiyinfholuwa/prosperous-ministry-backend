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
                        @auth
                            <li ><a href="{{route('dashboard')}}">Dashboard</a></li>

                        @else
                            <li ><a href="{{route('login')}}">Login</a></li>

                        @endauth
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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="header-text">
                    <p style="font-weight: 500 !important;">
                        Welcome to Prosperous People Ministry, where God delights in your prosperity and growth. In our community, we pray, fellowship, teach the word, and network with one another, all while embracing His promise of health and abundance. Thank you for visiting, and I look forward to connecting with you.
                        <br><strong>(Abayomi Bello, President PPM)</strong>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{asset('frontend/images/img.png')}}" alt="Prosperous People Ministry" class="banner-image">
            </div>
        </div>
    </div>
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
        font-weight: 800;
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
            font-weight: 800;
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

<div class="services section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/service-01.png')}}" alt="online degrees">
                    </div>
                    <div class="main-content">
                        <h4>Mission Statement</h4>
                        <p>At Prosperous People Ministry, our mission is to transform lives through the truth of God’s Word, empowering individuals to prosper in every area—spiritually, mentally, physically, and socially. We are dedicated to teaching the true message of prosperity and equipping believers to live victorious, abundant lives that reflect God’s goodness and grace.

                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/service-02.png')}}" alt="short courses">
                    </div>
                    <div class="main-content">
                        <h4>Vision Statement</h4>
                        <p>We envision a community of believers who thrive in God’s promises, carrying the light of Christ across all borders and breaking through limitations. Through faith, fellowship, and strategic outreach, we aim to redefine prosperity and inspire a generation to live fully in God’s abundant love and purpose.

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Inspired Articles

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Explore Inspiring articles that uplift and empower.<br/>
                                <a target="_blank" href="https://medium.com/@prosperouspeople292" class="btn btn-dark">Explore Articles</a>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Our Community
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Be Part of our growing Community Join community of believers and grow <br/>
                                <a target="_blank" href="https://chat.whatsapp.com/GEWK7wUcXcPK6CFsdTTen3" class="btn btn-dark">Join Our Community</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Life Changing Teachings
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Listen to sermons that will change your life <br/>
                                <a target="_blank" href=" https://www.youtube.com/@TheProsperousPeopleMinistry" class="btn btn-dark">Click to Watch</a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="section-heading">
                    <h2>Salvation is Free</h2>
                    <p>Come to Jesus Accept Jesus as your personal Lord and Saviour today
                    </p>
                    <div class="main-button">
                        <a target="_blank" href="https://forms.gle/PQovNmooa7UqggBx7">Speak to Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
{{--                        <span class="author">Stella Blair</span>--}}
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
