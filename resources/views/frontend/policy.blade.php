
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .policy-section {
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Section Title */
        .policy-section h3 {
            color: #095a9f;
            font-weight: 600;
            font-size: 1.75rem;
            margin-bottom: 20px;
            border-left: 4px solid #095a9f;
            padding-left: 15px;
        }

        /* Paragraphs */
        .policy-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        /* List Styling */
        .policy-list {
            padding-left: 1rem;
            margin-bottom: 20px;
        }

        .policy-list li {
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #333;
            position: relative;
            padding-left: 25px;
        }

        .policy-list li::before {
            content: "\2022"; /* Bullet character */
            color: #095a9f;
            font-weight: bold;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* Callout Box for Important Information */
        .callout-box {
            background-color: #f1f9ff;
            border-left: 5px solid #007bff;
            padding: 15px;
            margin: 20px 0;
            font-size: 1.05rem;
            color: #333;
        }

        .callout-box p {
            margin: 0;
        }
    </style>

    <section class="policy-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Information We Collect</h3>
                    <p>We collect the following personal information to ensure quality healthcare services:</p>
                    <ul class="policy-list">
                        <li><strong>Personal Identifiers:</strong> Name, address, contact information, and other personal identifiers.</li>
                        <li><strong>Medical Information:</strong> Health conditions, treatment plans, medications, and healthcare data.</li>
                        <li><strong>Insurance Information:</strong> Details required for billing and reimbursement purposes.</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <h3>How We Use Your Information</h3>
                    <p>We use your personal information to provide comprehensive healthcare services, including:</p>
                    <ul class="policy-list">
                        <li>Medical consultations, treatment, and medication management.</li>
                        <li>Communicating with you regarding appointments, reminders, and health updates.</li>
                        <li>Coordinating with healthcare professionals and specialists involved in your care.</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <h3>How We Protect Your Information</h3>
                    <p>We employ strict security measures to safeguard your personal information:</p>
                    <ul class="policy-list">
                        <li>Restricted access to authorized healthcare professionals only.</li>
                        <li>Regular review and updates of our security protocols.</li>
                        <li>Encryption and secure storage of sensitive data.</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <h3>Sharing Your Information</h3>
                    <p>Your information may be shared with:</p>
                    <ul class="policy-list">
                        <li>Healthcare professionals and specialists involved in your care.</li>
                        <li>Insurance companies for billing and reimbursement purposes.</li>
                        <li>Government agencies or legal entities as required by law.</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <h3>Your Choices</h3>
                    <p>You have control over your personal information. You can:</p>
                    <ul class="policy-list">
                        <li>Access, update, or request deletion of your data.</li>
                        <li>Limit the collection or sharing of specific information (which may impact service quality).</li>
                    </ul>
                    <p>By using our services, you consent to the collection and use of your information as outlined in this policy. For any questions or concerns, please <a href="contact.html">contact us</a>.</p>
                </div>
            </div>
        </div>
    </section>


@endsection
<!-- Footer -->
