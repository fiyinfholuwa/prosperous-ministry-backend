
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background-color: #f4f4f4;
            line-height: 1.6;
        }

        /* Hero Section */
        .service-header {
            position: relative;
            background-image: url('https://media.istockphoto.com/id/2062608146/photo/a-female-nurse-caregiver-holds-hands-to-encourage-and-comfort-an-elderly-woman-for-care-and.webp?a=1&b=1&s=612x612&w=0&k=20&c=iE7nDzMFG-KFQr2BE6xK46lEXHvnWRzdoT5r3kLNq9g=');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 60vh;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            z-index: 1;
            overflow: hidden;
        }

        .service-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .service-header h2 {
            font-size: 3.5rem;
            font-weight: 700;
            z-index: 3;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .service-header p {
            font-size: 1.2rem;
            margin-top: 20px;
            z-index: 3;
        }

        /* Section Headings */
        .section-title {
            font-size: 2.5rem;
            color: #095a9f;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Content Sections */
        .content-section {
            padding: 60px 20px;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 50px;
            border-radius: 10px;
        }

        /* Steps and Benefits List */
        .content-section ul {
            list-style: none;
            padding: 0;
        }

        .content-section ul li {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
        }

        .content-section ul li:before {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: #095a9f;
        }

        /* Testimonials Section */
        .testimonial-box {
            background-color: #f9f9f9;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .testimonial-box:hover {
            transform: translateY(-5px);
        }

        .testimonial-box p {
            font-style: italic;
            color: #555;
        }

        .testimonial-box span {
            display: block;
            font-weight: 600;
            margin-top: 10px;
            color: #095a9f;
        }

        /* Call to Action Button */
        .cta-btn {
            background-color: #095a9f;
            color: #fff;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
            display: inline-block;
            margin-top: 30px;
        }

        .cta-btn:hover {
            background-color: #095a9f;
        }

        /* Contact Information */
        .contact-section {
            background-color: #1a202c;
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .contact-section h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .contact-section a {
            color: #095a9f;
            text-decoration: none;
            font-weight: 500;
        }

        .contact-section a:hover {
            color: #095a9f;
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .service-header {
                height: 40vh;
            }

            .service-header h2 {
                font-size: 2.5rem;
            }

            .service-header p {
                font-size: 1rem;
            }
        }
    </style>

    <section class="service-header">
        <div class="container text-center">
            <h2>Personal Care Assistance</h2>
            <p>Delivering compassionate care tailored to individual needs with excellence and dedication.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Service Overview</h3>
        <p>
            Our Personal Care Assistance (PCA) service is designed to provide personalized care to those who need help with daily activities. Whether it's help with dressing, meal preparation, or companionship, we ensure that you or your loved ones receive the highest level of care.
        </p>
    </section>

    <!-- How It Works -->
    <section class="container content-section">
        <h3 class="section-title">How It Works</h3>
        <ul>
            <li><strong>Initial Consultation:</strong> Our team assesses your unique needs and develops a customized care plan.</li>
            <li><strong>Care Plan Development:</strong> A detailed plan is created to meet your goals and ensure quality care.</li>
            <li><strong>Ongoing Support:</strong> Continuous monitoring and adjustments are made to ensure the best care experience.</li>
        </ul>
    </section>

    <!-- Benefits of the Service -->
    <section class="container content-section">
        <h3 class="section-title">Benefits of Our PCA Service</h3>
        <ul>
            <li>Highly personalized care tailored to individual needs.</li>
            <li>Experienced caregivers ensuring compassionate service.</li>
            <li>Improved quality of life and increased independence.</li>
            <li>Comprehensive support for both clients and families.</li>
        </ul>
    </section>


@endsection
<!-- Footer -->
