@extends('frontend.app')

<!-- Hero Section -->
@section('content')

    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        /* Hero Section */
        .hero-section {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://plus.unsplash.com/premium_photo-1661551859254-7878c939ad91?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGhlYWx0aGNhcmUlMjBhYm91dCUyMGJhbm5lcnxlbnwwfHwwfHx8MA%3D%3D') center center/cover no-repeat;
            height: 75vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            position: relative;
        }
        .hero-content {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 600;
            letter-spacing: 2px;
        }
        .hero-content p {
            font-size: 1.3rem;
            margin-top: 1rem;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #095a9f;
            margin-bottom: 3rem;
            position: relative;
        }
        .section-title::after {
            content: "";
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: #095a9f;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
        }

        /* Company Overview */
        .section-bg {
            background-color: #f8f9fa;
            padding: 4rem 0;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .value-icon {
            font-size: 3.5rem;
            color: #095a9f;
            margin-bottom: 1.5rem;
        }

        /* Team Section */
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        .team-member h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }
        .team-member p {
            font-size: 1rem;
            color: #777;
        }

        /* Accreditations Section */
        .certification-logo {
            width: 100px;
            height: 100px;
        }

        /* CTA Button */
        .btn-cta {
            background-color: #095a9f;
            color: #fff;
            border-radius: 30px;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 500;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-cta:hover {
            background-color: #095a9f;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
        }

        /* CTA Section */
        .cta-section2 {
            background: #0056b3;
            color: #fff;
            padding: 4rem 0;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        /* Spacing Adjustments */
        .row.g-4 {
            row-gap: 2.5rem;
        }
        .text-center {
            text-align: center;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .value-icon {
                font-size: 2.5rem;
            }
            .btn-cta {
                font-size: 1rem;
                padding: 10px 30px;
            }
            .team-member img {
                width: 120px;
                height: 120px;
            }
            .team-member h4 {
                font-size: 1rem;
            }
            .team-member p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            .hero-content p {
                font-size: 0.9rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
        }


        .value-card:hover .value-icon {
            color: #095a9f;
            transition: color 0.3s ease;
        }


        .choose-card:hover .value-icon {
            color: #095a9f;
            transition: color 0.3s ease;
        }
    </style>
    </style>
    <main>
        <!-- Hero Section -->
        <section class="hero-section mb-5">
            <div class="hero-content">
                <h1 class="display-3 mb-4">About AUTRIS Healthcare</h1>
                <p class="lead">Elevating Healthcare through Compassion, Expertise, and Innovation</p>
            </div>
        </section>

        <div class="container">
            <!-- Company Overview -->
            <section class="section-bg">
                <h2 class="section-title text-center">Company Overview</h2>
                <p class="text-center">
                    AUTRIS Healthcare is dedicated to providing compassionate, comprehensive, and cutting-edge healthcare services.
                    Our focus is on patient-centered care, ensuring that every individual receives the attention and treatment they need for optimal health and well-being.
                </p>
            </section>

            <!-- Mission, Vision, and Values -->
            <section class="section-bg">
                <h2 class="section-title text-center">Mission, Vision, and Values</h2>
                <div class="row g-4 text-center">
                    <div class="col-md-4">
                        <div class="card h-100 text-center p-4 value-card">
                            <div class="card-body">
                                <i class="fas fa-bullseye value-icon"></i>
                                <h3 class="card-title">Mission</h3>
                                <p class="card-text">Delivering high-quality, patient-centered healthcare with compassion and integrity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center p-4 value-card">
                            <div class="card-body">
                                <i class="fas fa-lightbulb value-icon"></i>
                                <h3 class="card-title">Vision</h3>
                                <p class="card-text">Empowering healthier futures with compassionate, innovative, and comprehensive healthcare services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center p-4 value-card">
                            <div class="card-body">
                                <i class="fas fa-heart value-icon"></i>
                                <h3 class="card-title">Values</h3>
                                <p class="card-text">Compassion, Integrity, Innovation, and Excellence are at the heart of everything we do.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Meet the Team -->
{{--            <section class="section-bg py-5">--}}
{{--                <div class="container">--}}
{{--                    <h2 class="section-title text-center mb-5">Meet the Team</h2>--}}
{{--                    <div class="row g-4 text-center justify-content-center">--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="card team-member p-4">--}}
{{--                                <div class="team-member-img-wrapper">--}}
{{--                                    <img src="https://plus.unsplash.com/premium_photo-1661578535048-7a30e3a71d25?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Y2hpZWYlMjBtZWRpY2FsJTIwb2ZmaWNlcnxlbnwwfHwwfHx8MA%3D%3D" alt="John Doe" class="rounded-circle mb-4 img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="team-member-name">John Doe</h4>--}}
{{--                                <p class="text-muted">Chief Medical Officer</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="card team-member p-4">--}}
{{--                                <div class="team-member-img-wrapper">--}}
{{--                                    <img src="https://media.istockphoto.com/id/513473609/photo/confident-hospital-nurse-smiling-while-working-in-modern-hospital.jpg?s=612x612&w=0&k=20&c=JK9Fk8nTJa_4noPCM3UsKLS9R1d14OCElnFT3VnstNE=" alt="Emily Williams" class="rounded-circle mb-4 img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="team-member-name">Emily Williams</h4>--}}
{{--                                <p class="text-muted">Head of Nursing</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="card team-member p-4">--}}
{{--                                <div class="team-member-img-wrapper">--}}
{{--                                    <img src="https://images.unsplash.com/photo-1559718062-361155fad299?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8RGlyZWN0b3IlMjBvZiUyMG9wZXJhdGlvbnN8ZW58MHx8MHx8fDA%3D" alt="Michael Smith" class="rounded-circle mb-4 img-fluid">--}}
{{--                                </div>--}}
{{--                                <h4 class="team-member-name">Michael Smith</h4>--}}
{{--                                <p class="text-muted">Director of Operations</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

            <!-- Accreditations & Certifications -->
{{--            <section class="section-bg">--}}
{{--                <h2 class="section-title text-center">Accreditations & Certifications</h2>--}}
{{--                <div class="row justify-content-center g-4 text-center">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <img src="/api/placeholder/100/100" alt="Accreditation Logo" class="certification-logo mx-auto">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <img src="/api/placeholder/100/100" alt="Certification Logo" class="certification-logo mx-auto">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <img src="" alt="License Logo" class="certification-logo mx-auto">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
            <!-- Why Choose Us -->
            <section class="section-bg">
                <h2 class="section-title text-center">Why Choose Us</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-4 choose-card">
                            <div class="card-body">
                                <i class="fas fa-hand-holding-heart value-icon"></i>
                                <h4>Compassionate Care</h4>
                                <p>Our healthcare services are driven by compassion and a deep sense of responsibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-4 choose-card">
                            <div class="card-body">
                                <i class="fas fa-globe value-icon"></i>
                                <h4>Local Expertise</h4>
                                <p>We understand the local community and are committed to serving you better.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-4 choose-card">
                            <div class="card-body">
                                <i class="fas fa-sync-alt value-icon"></i>
                                <h4>Flexible Services</h4>
                                <p>Our care services are designed to be adaptable to your specific needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 text-center p-4 choose-card">
                            <div class="card-body">
                                <i class="fas fa-thumbs-up value-icon"></i>
                                <h4>Proven Quality</h4>
                                <p>We adhere to the highest standards of healthcare, proven by our accreditations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- CTA Section -->
        <section class="cta-section2 text-center">
            <div class="container">
                <a href="{{route('booking')}}" class="btn btn-danger">Get Started</a>

                <h2 class="display-4">Experience Care That Cares for You</h2>
                <p class="lead mb-4">Book a consultation or learn more about our comprehensive services.</p>
            </div>
        </section>
    </main>
@endsection
<!-- Footer -->
