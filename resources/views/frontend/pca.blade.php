
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
            background-image: url('{{asset('frontend/images/3.png')}}');
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
            background: rgba(0, 0, 0, 0.3);
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
            <p>At Austris, we believe that everyone deserves the opportunity to live independently and with dignity in the comfort of their own home. Our Personal Care Assistants (PCAs) are compassionate professionals dedicated to providing personalized support tailored to the unique needs of each individual. With a focus on enhancing quality of life, our PCAs play a crucial role in helping clients maintain their independence while ensuring their safety and well-being.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Support for Daily Living</h3>
        <p>Our Personal Care Assistants offer a wide range of services designed to assist clients in their daily routines. These services include, but are not limited to:</p>
        <ul>
            <li><strong>Personal Hygiene and Grooming:</strong> Our PCAs provide assistance with bathing, dressing, grooming, and toileting. We ensure that our clients feel comfortable and confident in their appearance, promoting both physical and emotional well-being.</li>
            <li><strong>Mobility Assistance:</strong> For clients with limited mobility, our PCAs offer support with walking, transferring between beds and chairs, and navigating through the home or community. We prioritize safety and independence, helping clients move freely and confidently.</li>
            <li><strong>Medication Management:</strong> Our trained PCAs offer medication reminders to ensure that clients take their prescribed medications on time. We understand the importance of medication adherence in managing health conditions and preventing complications.</li>
            <li><strong>Meal Preparation and Nutrition:</strong> Nutrition plays a vital role in overall health. Our PCAs can prepare balanced, nutritious meals tailored to individual dietary preferences and restrictions, ensuring clients receive the nourishment they need.</li>
            <li><strong>Companionship and Emotional Support:</strong> Loneliness can significantly impact mental health. Our PCAs provide companionship and engage clients in meaningful conversations and activities, helping to combat feelings of isolation and promoting emotional well-being.</li>
        </ul>
    </section>

    <!-- Personalized Care Plans -->
    <section class="container content-section">
        <h3 class="section-title">Personalized Care Plans</h3>
        <p>At Austris, we recognize that every individual has unique needs and preferences. That’s why we take the time to develop personalized care plans in collaboration with clients and their families. This tailored approach ensures that our services align with each client’s lifestyle, preferences, and health requirements.</p>
    </section>

    <!-- Highly Trained Professionals -->
    <section class="container content-section">
        <h3 class="section-title">Highly Trained Professionals</h3>
        <p>All of our Personal Care Assistants undergo extensive training and background checks to ensure that they are not only skilled in providing care but also compassionate and respectful. Our team is committed to maintaining the highest standards of professionalism and integrity while ensuring clients feel safe and supported.</p>
    </section>

    <!-- Flexible Scheduling Options -->
    <section class="container content-section">
        <h3 class="section-title">Flexible Scheduling Options</h3>
        <p>We understand that needs can vary from person to person, which is why we offer flexible scheduling options. Whether you require assistance for just a few hours a week or need full-time care, we work closely with you to create a care schedule that fits seamlessly into your daily life.</p>
    </section>

    <!-- Commitment to Quality Care -->
    <section class="container content-section">
        <h3 class="section-title">A Commitment to Quality Care</h3>
        <p>At Austris, our mission is to deliver exceptional care that enhances the quality of life for our clients. We are dedicated to continuous improvement and regularly review our services to ensure that we meet and exceed the expectations of those we serve. Client feedback is invaluable to us, and we actively encourage open communication to maintain a high standard of care.</p>
    </section>

    <!-- Get Started -->
    <section class="container content-section">
        <h3 class="section-title">Get Started with Austris</h3>
        <p>If you or a loved one are in need of support at home, our team at Austris is here to help. We invite you to contact us today to discuss your needs and learn more about how our Personal Care Assistants can provide the support you need to live comfortably and independently. Let us be your partner in care, helping you achieve the quality of life you deserve.</p>
    </section>



@endsection
<!-- Footer -->
