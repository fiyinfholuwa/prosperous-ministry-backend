@extends('frontend.app')


@section('content')
<!-- hero
================================================== -->
<section id="hero" class="s-hero target-section">

    <div class="s-hero__bg">
        <div class="gradient-overlay"></div>
    </div>

    <div class="row s-hero__content">
        <div class="column">

            <h1>Welcome.</h1>
            <div class="s-hero__content-about">

                <p>
                    We are dedicated to serving <br>
                    with faith and compassion, <br>
                    spreading the message of hope.
                </p>

{{--                <footer>--}}
{{--                    <div class="s-hero__content-social">--}}
{{--                        <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>--}}
{{--                        <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>--}}
{{--                        <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>--}}
{{--                        <a href="#0"><i class="fab fa-youtube" aria-hidden="true"></i></a>--}}
{{--                    </div>--}}
{{--                </footer>--}}
            </div>

        </div>
    </div>


    <div class="s-hero__scroll">
        <a href="#about" class="s-hero__scroll-link smoothscroll">
            Learn More
        </a>
    </div>

</section> <!-- end s-hero -->


<!-- about
================================================== -->
<section id="about" class="s-about">

    <div class="horizontal-line"></div>

    <div class="row">
        <div class="column large-12">

            <div class="section-title" data-num="01" data-aos="fade-up">
                <h3 class="h6">Who We Are</h3>
            </div>

        </div>

        <div class="column large-6 w-900-stack s-about__intro-text">
            <h1 class="display-1" data-aos="fade-up">
                <!--                    We are a ministry committed to spreading the Gospel, serving communities, and living out our faith.-->
            </h1>

            <p class="lead" data-aos="fade-up">
                Prosperous People Ministry, where God delights in your prosperity and growth. In our community, we pray, fellowship, teach the word and network with one another, all while embracing His promise of health and abundance. Thank you for visiting and I look forward to connecting with you. (Abayomi Bello, President PPM)
            </p>
        </div>

        <div class="column large-6 w-900-stack s-about__photo-block">
            <div style="width: 100%; height: 300px;" class="s-about__photo" data-aos="fade-up"></div>
        </div>
    </div>

    <div class="row block-large-1-2 block-tab-full s-about__process item-list">
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Mission</h3>
            <p>
                At Prosperous People Ministry, our mission is to transform lives through the truth of God’s Word, empowering individuals to prosper in every area—spiritually, mentally, physically, and socially. We are dedicated to teaching the true message of prosperity and equipping believers to live victorious, abundant lives that reflect God’s goodness and grace.
            </p>
        </div>
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Vision</h3>
            <p>
                We envision a community of believers who thrive in God’s promises, carrying the light of Christ across all borders and breaking through limitations. Through faith, fellowship, and strategic outreach, we aim to redefine prosperity and inspire a generation to live fully in God’s abundant love and purpose.
            </p>
        </div>
        <!--            <div class="column item item-process" data-aos="fade-up">-->
        <!--                <h3 class="item-title">Teach</h3>-->
        <!--                <p>-->
        <!--                    We are committed to teaching the Word of God, helping others grow in their faith and understanding of the Bible.-->
        <!--                </p>-->
        <!--            </div>-->
        <!--            <div class="column item item-process" data-aos="fade-up">-->
        <!--                <h3 class="item-title">Transform</h3>-->
        <!--                <p>-->
        <!--                    Through God’s grace, we seek to transform lives, helping individuals and communities to experience spiritual growth and renewal.-->
        <!--                </p>-->
        <!--            </div>-->
    </div>

</section> <!-- end s-about -->

<section id="" class="s-portfolio" style="background: #da84b1;">

    <div class="row s-porfolio__top">

        <div class="column large-10 -stack">
            <h1 class="display-1" data-aos="fade-up">
                Be Part of our growing Community
                Join community of believers and grow
            </h1>
        </div>
    </div> <!-- end s-portfolio__top-->

    <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">
        <a target="_blank" href="https://chat.whatsapp.com/GEWK7wUcXcPK6CFsdTTen3" class="btn btn-dark">Join Our Community</a>

    </div> <!-- folio-list -->

</section> <!-- end s-portfolio -->


<!-- services
================================================== -->
<section id="services" class="s-services">

    <div class="row">
        <div class="column large-12">
            <div class="section-title" data-num="02" data-aos="fade-up">
                <h3 class="h6">Our Events
                </h3>
            </div>
        </div>
        <div class="column large-12 w-900-stack">
            <h1 class="display-1" data-aos="fade-up">
                Experience engaging discussions and meaningful fellowship whether you are seeking spiritual growth, financial wisdom or physical health. This is the perfect opportunity to connect and thrive.
            </h1>
        </div>

    </div>

    @if(count($events) > 0)
        <div class="row block-large-1-2 block-tab-full s-services__services item-list">
            @foreach($events as $event)
                    <div class="column item item-service" data-aos="fade-up">
                        <a href="{{route('event.detail', $event->slug)}}">

                        <span class="service-icon service-icon--community-outreach"></span>
                        <h3 class="item-title">{{$event->title}}</h3>
                        <img src="{{asset($event->image)}}" style="width: 100%">
                        <p>
                            {!! (\Illuminate\Support\Str::limit($event->body, 40, '...')) !!}                    </p>
                        </a>
                    </div>
            @endforeach
            <a href="{{route('event')}}" class="btn btn-danger">View All Events</a>
        </div>
    @endif


</section> <!-- end s-services -->

<section id="events" class="s-portfolio" style="background: #da84b1;">

    <div class="row s-porfolio__top">
        <div class="column large-6 w-900-stack">
            <div class="section-title" data-num="03" data-aos="fade-up">
                <h3 class="h6" style="color: black;">Inspired Articles</h3>
            </div>
        </div>
        <div class="column large-12 w-900-stack">
            <h1 class="display-1" data-aos="fade-up">
                Explore Inspiring articles that uplift and empower.</h1>
        </div>
    </div> <!-- end s-portfolio__top-->

    <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">
        <a href="" class="btn btn-dark">Explore Articles</a>

    </div> <!-- folio-list -->

</section> <!-- end s-portfolio -->


<!-- clients
================================================== -->


<!-- contact
================================================== -->
<section class="s-contact">

    <div class="row narrower s-contact__top h-text-center">
        <div class="column">
            <h3 class="h6">Get In Touch</h3>
            <h1 class="display-1">
                Come to Jesus
                Accept Jesus as your personal Lord and Saviour today
            </h1>
        </div>
    </div> <!-- s-contact__top -->

    <div class="row h-text-center">
        <div class="column">
            <p class="s-contact__email">
                <a target="_blank" href="https://forms.gle/PQovNmooa7UqggBx7">contact us</a>
            </p>
        </div>
    </div>

</section> <!-- end s-contact -->
@endsection

<!-- footer
================================================== -->
