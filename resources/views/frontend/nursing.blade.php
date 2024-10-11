
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
            background-image: url('{{asset('frontend/images/8.png')}}');
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
            <h2>Nursing Services</h2>
            <p>Exceptional nursing care to meet the diverse needs of our clients, delivered by compassionate professionals in-home or healthcare facilities.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Nursing Services</h3>
        <p>
            Our nursing services encompass a wide range of medical care and support, including:
        </p>
        <ul>
            <li><strong>Assessment and Monitoring:</strong> Registered nurses (RNs) conduct thorough health assessments to monitor vital signs, evaluate medical conditions, and track progress. Regular assessments help us identify changes in health status and adapt care plans accordingly.</li>
            <li><strong>Medication Administration:</strong> Our nursing team ensures safe and effective administration of medications, providing education on medication management, including potential side effects and interactions.</li>
            <li><strong>Wound Care:</strong> Our skilled nurses are experienced in providing comprehensive wound care for various injuries and surgical sites, focusing on promoting healing while minimizing the risk of infection.</li>
            <li><strong>Chronic Disease Management:</strong> For clients with chronic conditions like diabetes, heart disease, or arthritis, our nurses offer ongoing management and education to help clients understand and manage their health conditions effectively.</li>
            <li><strong>Post-Surgical Care:</strong> Our nursing team provides specialized care post-surgery, including monitoring, pain management, and assistance with daily activities to support a smooth recovery.</li>
            <li><strong>Health Education:</strong> We provide education on health conditions, self-care techniques, and healthy lifestyle choices, empowering clients to make informed decisions and manage their health independently.</li>
        </ul>
    </section>

    <!-- Personalized Care Plans -->
    <section class="container content-section">
        <h3 class="section-title">Personalized Care Plans</h3>
        <p>
            At Austris Healthcare, we collaborate with clients, families, and healthcare providers to develop personalized care plans that address specific medical needs and goals. This ensures that our nursing services are tailored to each client’s individual situation.
        </p>
    </section>

    <!-- Dedicated Nursing Professionals -->
    <section class="container content-section">
        <h3 class="section-title">Dedicated Nursing Professionals</h3>
        <p>
            Our nursing team consists of licensed practical nurses (LPNs) and registered nurses (RNs) committed to delivering high-quality care with compassion and respect. Each nurse undergoes rigorous training and continuous education to stay up-to-date on healthcare advancements.
        </p>
    </section>

    <!-- Flexible Care Options -->
    <section class="container content-section">
        <h3 class="section-title">Flexible Care Options</h3>
        <p>
            We offer flexible nursing services that can be adapted to meet the changing needs of our clients. Whether you require care for a few hours, daily visits, or around-the-clock support, we accommodate your preferences.
        </p>
    </section>

    <!-- Commitment to Quality and Safety -->
    <section class="container content-section">
        <h3 class="section-title">Commitment to Quality and Safety</h3>
        <p>
            At Austris Healthcare, we prioritize the safety and well-being of our clients. We adhere to the highest standards of nursing care and regularly evaluate our services to ensure they meet client expectations. We welcome feedback to continually improve our nursing services.
        </p>
    </section>

    <!-- Call to Action -->
    <section class="container content-section text-center">
        <h3 class="section-title">Start Your Journey with Austris Healthcare</h3>
        <p>
            If you or a loved one require nursing services, Austris Healthcare is here to provide the support and care you need. Our dedicated team is committed to enhancing your health and quality of life through personalized nursing care.
            <strong>Contact us today</strong> to learn more about our Nursing services and how we can assist you in achieving your health goals.
        </p>
    </section>


@endsection
<!-- Footer -->
