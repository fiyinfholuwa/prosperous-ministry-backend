
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        .testimonials-section {
            background-color: var(--bg-light);
        }

        .testimonial-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .client-name, .partner-name {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .testimonial-text {
            font-size: 1rem;
            color: var(--text-color);
            margin-bottom: 15px;
        }

        .video-wrapper {
            margin-top: 10px;
        }

        .testimonial-video {
            width: 100%;
            border-radius: 12px;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    <section class="py-5 testimonials-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Client Testimonials</h2>

            <!-- Client Stories -->
{{--            <div class="row mb-4">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="testimonial-card mb-4">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="client-name">Jane Doe</h5>--}}
{{--                            <p class="testimonial-text">"AUTRIS Healthcare provided exceptional support for my mother during her recovery. The team was compassionate and attentive, making the process so much easier for our family."</p>--}}
{{--                        </div>--}}
{{--                        <div class="video-wrapper">--}}
{{--                            <video controls class="testimonial-video">--}}
{{--                                <source src="/videos/testimonial1.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="testimonial-card mb-4">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="client-name">John Smith</h5>--}}
{{--                            <p class="testimonial-text">"I cannot thank AUTRIS enough for their outstanding service. They truly cared for my father as if he were their own. Highly recommend!"</p>--}}
{{--                        </div>--}}
{{--                        <div class="video-wrapper">--}}
{{--                            <video controls class="testimonial-video">--}}
{{--                                <source src="/videos/testimonial2.mp4" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Referral Partner Testimonials -->
{{--            <h3 class="text-center section-title mb-4">Referral Partner Testimonials</h3>--}}
            @if(count($testimonials) > 0)
                <div class="row">
                    @foreach($testimonials as $test)
                        <div class="col-md-6 mt-3">
                            <div class="testimonial">
                                <p>{{$test->body}}</p>
                                <footer class="blockquote-footer mt-3">{{$test->full_name}}</footer>
                            </div>
                        </div>

                    @endforeach

                </div>

            @endif

            <!-- Submit Your Story CTA -->
            <div class="text-center mt-5">
                <h3 class="section-title">Share Your Story</h3>
                <p>We would love to hear about your experience with AUTRIS Healthcare. Share your story with us!</p>
                <a href="" class="btn btn-primary btn-lg">Submit Your Story</a>
            </div>
        </div>
    </section>

@endsection
<!-- Footer -->
