
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .terms-section {
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Section Title */
        .terms-section h3 {
            color: #095a9f;
            font-weight: 600;
            font-size: 1.75rem;
            margin-bottom: 20px;
            border-left: 4px solid #007bff;
            padding-left: 15px;
        }

        /* Paragraphs */
        .terms-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        /* Numbered List Styling */
        .terms-list {
            padding-left: 1rem;
            margin-bottom: 20px;
        }

        .terms-list li {
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #333;
            padding-left: 20px;
            position: relative;
        }

        .terms-list li strong {
            font-weight: 600;
            color: #095a9f;
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

    <section class="terms-section container">
        <div class="row">
            <div class="col-md-12">
                <h3>Terms of Service</h3>
                <p>Welcome to Autris Home Care Agency. These Terms of Service govern your use of our home care services. By using our services, you agree to the following:</p>

                <ol class="terms-list">
                    <li><strong>Acceptance of Terms:</strong> By using the home care services provided by Autris Home Care Agency, you agree to comply with and be bound by the following Terms of Service. If you do not agree, please refrain from using our services.</li>

                    <li><strong>Home Care Services:</strong> Autris Home Care Agency offers personal care, respite care, hospice care, skilled nursing, meal preparation, light housekeeping, and other non-medical services. These services are provided by trained and certified caregivers to meet the daily living needs of our clients.</li>

                    <li><strong>Client Responsibilities:</strong> As a client, you are responsible for providing accurate information about your care needs and changes in your health or living situation. Additionally, you must treat our caregivers with respect and adhere to the care plans and guidelines provided.</li>

                    <li><strong>Confidentiality:</strong> We respect the confidentiality of your personal information and care details. Strict privacy policies are maintained to ensure the security of your data.</li>

                    <li><strong>Payment:</strong> Payment for home care services is arranged through private pay, long-term care insurance, veterans benefits, Medicaid, Medicare, or other payment options. You are responsible for payment obligations related to the services received.</li>

                    <li><strong>Care Plan Development:</strong> Personalized care plans are developed for each client based on their needs and preferences. These plans are reviewed and updated regularly to ensure high-quality care.</li>

                    <li><strong>Communication:</strong> Open communication between clients, caregivers, and agency staff is crucial for effective service. We encourage you to ask questions or raise concerns to ensure optimal care.</li>

                    <li><strong>Changes to Terms:</strong> Autris Home Care Agency reserves the right to modify these Terms of Service at any time. Updates will be posted on our website and will take effect immediately. Clients are responsible for reviewing the Terms periodically.</li>

                    <li><strong>Termination of Services:</strong> Autris Home Care Agency reserves the right to terminate services if clients violate these Terms or engage in harmful or inappropriate behavior towards caregivers or other clients.</li>
                </ol>

                <div class="callout-box">
                    <p><strong>Important Notice:</strong> By using our services, you confirm that you have read and agree to these Terms of Service. If you have any questions or concerns, please contact us at <a href="mailto:info@autrishealthcare.com">info@autrishealthcare.com</a>.</p>
                </div>

                <p>Thank you for choosing Autris Home Care Agency for your home care needs. We are dedicated to providing compassionate and professional care for you and your family.</p>
            </div>
        </div>
    </section>
@endsection
<!-- Footer -->
