
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
            background-image: url('{{asset('frontend/images/4.png')}}');
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
            <h2>Skilled Nursing</h2>
            <p>At Austris Healthcare, we understand that medical care needs can vary significantly from person to person. Our Skilled Nursing services are designed to provide comprehensive, high-quality care delivered by licensed nursing professionals. Whether you or a loved one requires short-term recovery support or long-term nursing care, our dedicated team is here to ensure that every client receives the attention and expertise they deserve.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Skilled Nursing Services</h3>
        <p>Our Skilled Nursing services encompass a broad spectrum of medical care tailored to the individual needs of our clients. Some of the key services we provide include:</p>
        <ul>
            <li><strong>Medication Administration:</strong> Our licensed nurses are trained to administer medications accurately and safely, ensuring that clients adhere to their prescribed regimens. We also offer medication management services, including education on potential side effects and interactions.</li>
            <li><strong>Wound Care and Management:</strong> Whether it’s post-surgical care or treatment for chronic wounds, our skilled nurses are equipped to provide specialized wound care, including cleaning, dressing, and monitoring for signs of infection.</li>
            <li><strong>Chronic Disease Management:</strong> Clients with chronic illnesses, such as diabetes, heart disease, or COPD, require ongoing monitoring and management. Our skilled nursing team provides education, regular assessments, and interventions to help manage these conditions effectively.</li>
            <li><strong>Vital Signs Monitoring:</strong> Regular monitoring of vital signs—such as blood pressure, pulse, temperature, and respiratory rate—is essential for identifying potential health issues early. Our nurses are trained to perform these assessments and report any concerning changes to the healthcare team.</li>
            <li><strong>Post-Surgical Care:</strong> Following surgery, patients often need specialized care to ensure a smooth recovery. Our skilled nurses provide post-operative assessments, pain management, and assistance with daily activities, helping clients regain their strength and independence.</li>
            <li><strong>Palliative and Hospice Care:</strong> For clients with terminal illnesses, our skilled nursing team provides compassionate palliative and hospice care. We focus on comfort, pain management, and emotional support for both clients and their families during this difficult time.</li>
        </ul>
    </section>

    <!-- Individualized Care Plans -->
    <section class="container content-section">
        <h3 class="section-title">Individualized Care Plans</h3>
        <p>At Austris Healthcare, we believe that personalized care is the key to effective nursing services. Our skilled nursing team collaborates closely with clients, families, and healthcare providers to develop individualized care plans that address specific medical needs and personal preferences. This tailored approach ensures that we provide the most appropriate and effective care for each client.</p>
    </section>

    <!-- Highly Qualified Nursing Professionals -->
    <section class="container content-section">
        <h3 class="section-title">Highly Qualified Nursing Professionals</h3>
        <p>Our skilled nursing team consists of licensed practical nurses (LPNs) and registered nurses (RNs) who are dedicated to providing compassionate and competent care. Each member of our team undergoes rigorous training and continuous education to stay updated on the latest medical practices and protocols.</p>
    </section>

    <!-- Flexible Care Options -->
    <section class="container content-section">
        <h3 class="section-title">Flexible Care Options</h3>
        <p>We recognize that each client’s situation is unique. That’s why we offer flexible care options that can be tailored to meet individual needs. Whether you require care for a few hours a day, several days a week, or around-the-clock nursing support, we are here to accommodate your needs.</p>
    </section>

    <!-- Commitment to Quality and Safety -->
    <section class="container content-section">
        <h3 class="section-title">Commitment to Quality and Safety</h3>
        <p>At Austris Healthcare, we prioritize the health and safety of our clients. We adhere to the highest standards of care and regularly evaluate our practices to ensure compliance with regulatory guidelines. Our commitment to quality is reflected in our ongoing training programs and quality assurance measures.</p>
    </section>

    <!-- Get Started -->
    <section class="container content-section">
        <h3 class="section-title">Start Your Journey with Austris Healthcare</h3>
        <p>If you or a loved one require skilled nursing services, Austris Healthcare is here to provide the care you need. Our compassionate team is ready to assist with all aspects of medical care, ensuring that you receive the highest quality support in the comfort of your home. Contact us today to learn more about our Skilled Nursing services and how we can help you or your family member achieve better health and well-being.</p>
    </section>


@endsection
<!-- Footer -->
