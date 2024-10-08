
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        /* Contact Section Background */
        .contact-section {
            background-color: var(--bg-light);
            padding: 50px 0;
        }

        /* Section Title */
        .section-title {
            font-size: 2.5rem;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: center;
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
            border-radius: 2px;
        }

        /* Subsection Title */
        .sub-section-title {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* Contact Form Styles */
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 1rem;
            border: 1px solid #ccc;
            width: 100%;
            max-width: 100%;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 50px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
        }

        /* Contact Information Box */
        .contact-info {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }

        .contact-details {
            font-size: 1.125rem;
            line-height: 1.8;
        }

        .contact-item {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--accent-color);
        }

        /* Live Chat Button */
        .btn-secondary {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 50px;
            background-color: navy;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
            width: 100%; /* Full-width buttons */
        }

        .btn-secondary:hover {
            background-color:#095a9f;
        }

        /* Map Wrapper */
        .map-wrapper {
            border-radius: 12px;
            overflow: hidden;
            width: 100%; /* Make sure map wrapper stays within bounds */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            /* Title section */
            .section-title {
                font-size: 2rem;
                padding-bottom: 10px;
                margin-bottom: 30px;
            }

            /* Subsection title */
            .sub-section-title {
                font-size: 1.75rem;
                margin-bottom: 15px;
            }

            /* Form Controls */
            .form-control {
                padding: 12px 10px;
                font-size: 1rem;
                margin-bottom: 1rem;
            }

            /* Buttons */
            .btn-primary, .btn-secondary {
                padding: 1rem;
                font-size: 1.125rem;
                margin-bottom: 1.5rem;
            }

            /* Contact Information */
            .contact-info {
                padding: 20px;
            }

            /* Contact details */
            .contact-details {
                font-size: 1rem;
                line-height: 1.6;
            }

            /* Contact item */
            .contact-item {
                margin-bottom: 10px;
            }

            /* Map wrapper */
            .map-wrapper {
                height: 300px;
                margin-top: 1.5rem;
            }

            /* Adjust container padding */
            .container, .content {
                padding: 0 1rem;
            }

            /* Navbar */
            .navbar {
                padding: 1rem;
            }
        }
    </style>

    <section class="py-5 contact-section">
        <div class="container">
            <!-- Section Heading -->
            <h2 class="text-center section-title mb-5">Contact Us</h2>

            <!-- Contact Form and Information Row -->
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6 mb-4">
                    <h3 class="sub-section-title">Get in Touch</h3>
                    <form id="contactForm" method="POST" action="{{ route('contact.save') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                            @error('name')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                            @error('email')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            <div class="invalid-feedback">Please enter your contact number.</div>
                            @error('phone')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message') }}</textarea>
                            <div class="invalid-feedback">Please enter your message.</div>
                            @error('message')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-6 mb-4 contact-info">
                    <h3 class="sub-section-title">Contact Information</h3>
                    <ul class="contact-details list-unstyled">
                        <li class="contact-item">
                            <strong>Phone:</strong>
                            <a href="tel:+1234567890" class="text-decoration-none">+1 (234) 567-890</a>
                        </li>
                        <li class="contact-item">
                            <strong>Email:</strong>
                            <a href="mailto:info@autrishealthcare.com" class="text-decoration-none">info@autrishealthcare.com</a>
                        </li>
                        <li class="contact-item">
                            <strong>Address:</strong>
                            123 Healthcare St, City, State, Zip
                        </li>
                        <li class="contact-item">
                            <strong>Operating Hours:</strong>
                            Mon-Fri, 9 AM - 5 PM
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Map Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="sub-section-title">Our Location</h3>
                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <!-- Live Chat Button -->
            <div class="text-center mt-5">
                <h3 class="sub-section-title">Need Immediate Support?</h3>
                <button class="btn btn-secondary" id="liveChatBtn">Chat with Us</button>
            </div>
        </div>
    </section>


@endsection
<!-- Footer -->
