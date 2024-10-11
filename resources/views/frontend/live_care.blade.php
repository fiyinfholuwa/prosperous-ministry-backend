
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
            <h2>Live-In Care</h2>
            <p>Comprehensive around-the-clock support from compassionate caregivers, ensuring comfort and independence at home.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Live-In Care Services</h3>
        <p>
            Our Live-In Care services are designed to cater to a wide range of needs, ensuring that each client receives personalized attention and support. Key services include:
        </p>
        <ul>
            <li><strong>24/7 Personal Assistance:</strong> Caregivers are available around the clock to assist with daily activities such as bathing, dressing, grooming, and toileting.</li>
            <li><strong>Medication Management:</strong> Caregivers provide medication reminders and assist with administration, ensuring adherence to prescribed treatment plans.</li>
            <li><strong>Meal Preparation:</strong> Nutritious meals are prepared based on clients’ dietary preferences and restrictions, promoting a healthy lifestyle.</li>
            <li><strong>Companionship:</strong> Caregivers offer companionship and engage clients in conversations and activities to foster a supportive environment.</li>
            <li><strong>Mobility Support:</strong> Assistance with walking, transferring, and moving around the home while prioritizing safety and independence.</li>
            <li><strong>Household Support:</strong> Light housekeeping duties, laundry, and grocery shopping are included to maintain a clean and organized living space.</li>
        </ul>
    </section>

    <!-- Personalized Care Plans -->
    <section class="container content-section">
        <h3 class="section-title">Personalized Care Plans</h3>
        <p>
            At Austris Healthcare, we believe in a tailored approach to care. Each client receives a personalized care plan developed in collaboration with their family and healthcare team. This plan addresses specific needs, preferences, and goals, ensuring that our services align with each client’s lifestyle.
        </p>
    </section>

    <!-- Highly Trained Caregivers -->
    <section class="container content-section">
        <h3 class="section-title">Highly Trained Caregivers</h3>
        <p>
            Our Live-In Care team consists of highly trained and experienced caregivers who are passionate about providing compassionate support. We conduct thorough background checks and ongoing training to ensure that our caregivers are equipped with the skills necessary to meet our clients' diverse needs.
        </p>
    </section>

    <!-- Flexibility and Comfort -->
    <section class="container content-section">
        <h3 class="section-title">Flexibility and Comfort</h3>
        <p>
            Choosing Live-In Care means clients can receive support in the familiar surroundings of their own homes. This not only enhances comfort but also promotes a sense of security. Our flexible care options allow us to adjust services as needs change, ensuring ongoing support throughout various stages of life.
        </p>
    </section>

    <!-- Commitment to Quality Care -->
    <section class="container content-section">
        <h3 class="section-title">Commitment to Quality Care</h3>
        <p>
            At Austris Healthcare, we are dedicated to maintaining the highest standards of care. We regularly monitor and evaluate our services to ensure they meet the needs of our clients. Your feedback is invaluable, and we encourage open communication to continually improve our services.
        </p>
    </section>

    <!-- Call to Action -->
    <section class="container content-section text-center">
        <h3 class="section-title">Start Your Journey with Austris Healthcare</h3>
        <p>
            If you or a loved one require live-in support, Austris Healthcare is here to help. Our compassionate team is committed to enhancing your quality of life and providing the necessary assistance to live independently and comfortably.
            <strong>Contact us today</strong> to learn more about our Live-In Care services and how we can tailor our support to meet your needs.
        </p>
    </section>


@endsection
<!-- Footer -->
