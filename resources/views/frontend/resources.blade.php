

@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        .resources-section {
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

        .guide-card {
            border: 1px solid var(--primary-color);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .guide-card:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .btn-primary, .btn-secondary {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 50px;
        }

        .btn-secondary {
            background-color: var(--accent-color);
            color: white;
        }

        .btn-secondary:hover {
            background-color: darken(var(--accent-color), 10%);
        }

        .accordion-button {
            background-color: var(--bg-light);
            color: var(--text-color);
            font-weight: 500;
        }

        .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .guide-card {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.5rem;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                padding: 1rem;
                font-size: 1.125rem;
            }
        }
    </style>
    <section class="py-5 resources-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Resources</h2>

            <!-- FAQs -->
            <div class="mb-5">
                <h3 class="section-title">Frequently Asked Questions (FAQs)</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services does AUTRIS Healthcare provide?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We provide a range of services including personal care assistance, skilled nursing, rehabilitation therapy, and more tailored to meet individual needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How can I pay for services?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We accept various payment methods including private pay, insurance, and Medicaid. Please contact us for more detailed information.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I customize my care plan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we work closely with families to create personalized care plans that meet the unique needs of each individual.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Downloadable Guides -->
            <div class="mb-5">
                <h3 class="section-title">Downloadable Guides</h3>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="guide-card text-center p-4">
                            <h5>How to Choose the Right Home Care Service</h5>
                            <a href="/downloads/home-care-guide.pdf" class="btn btn-primary">Download Guide</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="guide-card text-center p-4">
                            <h5>Caregiving Tips for Families</h5>
                            <a href="/downloads/caregiving-tips.pdf" class="btn btn-primary">Download Guide</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Care Needs Assessment Tool -->
            <div class="mb-5 text-center">
                <h3 class="section-title">Care Needs Assessment Tool</h3>
                <p>Use our interactive tool to assess your loved one’s needs and receive tailored service recommendations.</p>
                <a href="/care-needs-assessment" class="btn btn-primary btn-lg">Start Assessment</a>
            </div>

            <!-- Referral Partner Resources -->
            <div class="mb-5 text-center">
                <h3 class="section-title">Referral Partner Resources</h3>
                <p>Access materials and submit client referrals using the resources below.</p>
                <a href="/partner-resources" class="btn btn-primary btn-lg">Download Partner Materials</a>
                <a href="/submit-referral" class="btn btn-secondary btn-lg">Submit a Client Referral</a>
            </div>
        </div>
    </section>
@endsection
<!-- Footer -->
