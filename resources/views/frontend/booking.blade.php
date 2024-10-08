


@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        .consultation-section {
            background-color: var(--bg-light);
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

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 50px;
        }

        .img-fluid {
            border-radius: 12px;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .btn-primary {
                width: 100%;
                padding: 1rem;
                font-size: 1.125rem;
            }
        }
    </style>
    <section class="py-5 consultation-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Book a Consultation</h2>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h3 class="section-title">Schedule Your Free Consultation</h3>
                    <form method="POST" action="{{ route('booking.save') }}" class="needs-validation" novalidate>
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
                            <label for="phone" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            <div class="invalid-feedback">Please enter your contact number.</div>
                            @error('phone')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="dateTime" class="form-label">Preferred Date & Time</label>
                            <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" value="{{ old('dateTime') }}" required>
                            <div class="invalid-feedback">Please select a date and time.</div>
                            @error('dateTime')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Brief Description of Care Needs</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                            <div class="invalid-feedback">Please provide a brief description of your care needs.</div>
                            @error('description')
                            <p style="color: red; font-weight: bold;">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Book Consultation</button>
                    </form>

                </div>

                <div class="col-lg-6 mb-4">
                    <h3 class="section-title">Why Choose Us?</h3>
                    <p>At AUTRIS Healthcare, we prioritize your needs and offer compassionate care tailored to your unique situation. Our team is here to help you every step of the way.</p>
                    <img src="https://media.istockphoto.com/id/1782848258/photo/teenager-at-a-medical-appointment.jpg?s=612x612&w=0&k=20&c=64NB_2mcmVQy0wkNVYfUAGWxb5Vse7Gj7GjYkMR4NKQ=" alt="Consultation" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Footer -->
