
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
            background-image: url('{{asset('frontend/images/9.png')}}');
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
            <h2>Pediatrics</h2>
            <p>Comprehensive, compassionate care tailored to the unique needs of infants, children, and adolescents, delivered by dedicated pediatric professionals.</p>
        </div>
    </section>

    <!-- Service Overview Content -->
    <section class="container content-section">
        <h3 class="section-title">Comprehensive Pediatric Services</h3>
        <p>
            Our pediatric services encompass a range of medical and therapeutic support, including:
        </p>
        <ul>
            <li><strong>Well-Child Visits:</strong> Regular check-ups to monitor your child’s growth and development. Our pediatric nurses and healthcare providers conduct assessments, provide vaccinations, and address any health concerns parents may have.</li>
            <li><strong>Chronic Condition Management:</strong> For children with chronic illnesses such as asthma, diabetes, or allergies, our pediatric team offers ongoing monitoring and management, working closely with families to develop effective care plans.</li>
            <li><strong>Medication Administration and Management:</strong> Our skilled nursing team ensures safe medication administration for children, educating parents on usage, potential side effects, and the importance of adherence to prescribed regimens.</li>
            <li><strong>Developmental Assessments:</strong> Early intervention for developmental delays. Our specialists conduct assessments on speech, motor skills, and social development, creating tailored intervention plans to support your child’s growth.</li>
            <li><strong>Therapeutic Support:</strong> We offer physical therapy, occupational therapy, and speech therapy designed to help children develop essential skills and overcome challenges, using age-appropriate techniques to engage them in therapy sessions.</li>
            <li><strong>Nutritional Guidance:</strong> Our team provides dietary consultations to promote healthy eating habits and address nutritional concerns, ensuring children receive the necessary nutrients for proper growth and development.</li>
        </ul>
    </section>

    <!-- Personalized Care Plans -->
    <section class="container content-section">
        <h3 class="section-title">Personalized Care Plans</h3>
        <p>
            At Austris Healthcare, we believe that every child is unique. Our pediatric team collaborates with parents and healthcare providers to create personalized care plans that address each child's specific needs and goals. This ensures that our services align with your child’s health and developmental milestones.
        </p>
    </section>

    <!-- Experienced Pediatric Professionals -->
    <section class="container content-section">
        <h3 class="section-title">Experienced Pediatric Professionals</h3>
        <p>
            Our pediatric team consists of experienced healthcare providers, including pediatric nurses, therapists, and specialists passionate about working with children. Each member undergoes rigorous training and continuous education to stay current with best practices in pediatric care.
        </p>
    </section>

    <!-- Family-Centered Approach -->
    <section class="container content-section">
        <h3 class="section-title">Family-Centered Approach</h3>
        <p>
            We recognize the important role families play in a child's health and well-being. Our services involve parents and caregivers in the care process, fostering collaboration and communication. We also provide education and support to help families navigate their child’s health journey.
        </p>
    </section>

    <!-- Commitment to Quality Care -->
    <section class="container content-section">
        <h3 class="section-title">Commitment to Quality Care</h3>
        <p>
            At Austris Healthcare, we prioritize the health and safety of our young clients. We adhere to the highest standards of pediatric care and regularly evaluate our services to ensure they meet the needs of our clients. We encourage feedback to continually improve our pediatric services.
        </p>
    </section>

    <!-- Call to Action -->
    <section class="container content-section text-center">
        <h3 class="section-title">Start Your Child’s Journey with Austris Healthcare</h3>
        <p>
            If your child requires pediatric care, Austris Healthcare is here to provide the support and expertise you need. Our compassionate team is committed to enhancing your child’s health and well-being through personalized pediatric services.
            <strong>Contact us today</strong> to learn more about our Pediatrics services and how we can assist you and your family.
        </p>
    </section>


@endsection
<!-- Footer -->
