
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
            background-image: url('{{asset('frontend/images/7.png')}}');
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
            <h2>Rehabilitation Therapy</h2>
            <p>Specialized support and care to help individuals regain independence and improve their quality of life after surgery, injury, or illness.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Rehabilitation Therapy Services</h3>
        <p>
            Our Rehabilitation Therapy services encompass a variety of therapies aimed at enhancing physical, occupational, and speech abilities. Key services include:
        </p>
        <ul>
            <li><strong>Physical Therapy:</strong> Licensed physical therapists work with clients to improve mobility, strength, and balance through individualized exercise programs designed for recovery from injuries or surgeries.</li>
            <li><strong>Occupational Therapy:</strong> Our occupational therapists help clients regain skills needed for daily living and work activities, offering strategies and adaptive techniques for personal care, household tasks, and community participation.</li>
            <li><strong>Speech Therapy:</strong> For clients with communication or swallowing difficulties, speech therapists provide specialized assessments and interventions to improve speech clarity, language skills, and safe swallowing techniques.</li>
            <li><strong>Pain Management:</strong> Various techniques are employed by our rehabilitation team to manage and alleviate pain, including therapeutic exercises, manual therapy, and education on pain management strategies.</li>
            <li><strong>Fall Prevention and Safety Training:</strong> Our therapists provide fall risk assessments and personalized strategies to minimize hazards, educating clients on safe movement techniques and the use of assistive devices.</li>
        </ul>
    </section>

    <!-- Personalized Therapy Plans -->
    <section class="container content-section">
        <h3 class="section-title">Personalized Therapy Plans</h3>
        <p>
            At Austris Healthcare, we believe that effective rehabilitation begins with a thorough assessment. Our team conducts comprehensive evaluations to identify individual needs, challenges, and goals. Based on these assessments, we create personalized therapy plans that guide clients through their recovery journey.
        </p>
    </section>

    <!-- Highly Skilled Therapy Team -->
    <section class="container content-section">
        <h3 class="section-title">Highly Skilled Therapy Team</h3>
        <p>
            Our Rehabilitation Therapy team consists of experienced and licensed therapists who are passionate about helping clients achieve their goals. Each therapist is committed to ongoing professional development, ensuring they remain current with best practices and evidence-based techniques.
        </p>
    </section>

    <!-- Flexible Care Options -->
    <section class="container content-section">
        <h3 class="section-title">Flexible Care Options</h3>
        <p>
            We recognize that every client’s journey to recovery is unique. That’s why we offer flexible therapy options that can be delivered in-home or at outpatient facilities, depending on the client’s preference and needs. We work closely with clients to create a schedule that fits their lifestyle and recovery timeline.
        </p>
    </section>

    <!-- Commitment to Quality Care -->
    <section class="container content-section">
        <h3 class="section-title">Commitment to Quality Care</h3>
        <p>
            At Austris Healthcare, we prioritize the health and well-being of our clients. We adhere to the highest standards of care and regularly evaluate our rehabilitation programs to ensure they are effective and aligned with clients’ goals. Client satisfaction and safety are at the forefront of everything we do.
        </p>
    </section>

    <!-- Call to Action -->
    <section class="container content-section text-center">
        <h3 class="section-title">Start Your Recovery Journey with Austris Healthcare</h3>
        <p>
            If you or a loved one are in need of rehabilitation therapy services, Austris Healthcare is here to provide the support you need. Our compassionate and skilled therapists are dedicated to helping you regain your independence and enhance your quality of life.
            <strong>Contact us today</strong> to learn more about our Rehabilitation Therapy services and how we can assist you on your path to recovery.
        </p>
    </section>


@endsection
<!-- Footer -->
