
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <style>
        /* Blog Preview */
        body{
            font-family: 'Lato', sans-serif;
        }
        .blog-preview-section {
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

        .blog-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .card-img-wrapper {
            position: relative;
            overflow: hidden;
        }

        .card-img-wrapper img {
            transition: transform 0.3s ease;
        }

        .card-img-wrapper:hover img {
            transform: scale(1.1);
        }

        .card-img-overlay {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px;
            border-radius: 0 0 12px 12px;
        }

        .badge-category {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            text-transform: uppercase;
        }

        .card-body {
            padding: 1.5rem;
            text-align: left;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .card-text {
            font-size: 1rem;
            color: var(--text-color);
            margin-bottom: 1.25rem;
            line-height: 1.5;
        }

        .read-more {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-color);
            position: relative;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: var(--accent-color);
            text-decoration: none;
            transform: translateX(5px);
        }

        .read-more i {
            transition: transform 0.3s ease;
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Button for Blog Link */
        .btn-primary {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
        }

        .search-bar {
            flex-grow: 1;
            margin-right: 1rem;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
        }

        .logo-header {
            max-width: 150px;
        }

        /* Larger logo for desktop screens */
        @media (min-width: 992px) {
            .logo-header {
                max-width: 500px;
            }
        }

    </style>
    <section class="py-5 blog-preview-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Latest from Our Autris Insights</h2>

            <!-- Search Bar and Categories -->
            <div class="mb-4 d-flex justify-content-between">
                <input type="text" class="form-control search-bar" placeholder="Search Blog Posts..." aria-label="Search Blog">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <li><a class="dropdown-item" href="#">Senior Care Tips</a></li>
                        <li><a class="dropdown-item" href="#">Rehabilitation</a></li>
                        <li><a class="dropdown-item" href="#">Home Care Advice</a></li>
                        <li><a class="dropdown-item" href="#">Nutrition</a></li>
                    </ul>
                </div>
            </div>

            <!-- Blog Post Listings -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://media.istockphoto.com/id/1125084447/photo/scientific-analysis-of-alzheimers-disease-in-hospital-conceptual-image.webp?a=1&b=1&s=612x612&w=0&k=20&c=faR1petnGpvj5JS_BLGwEiLEaDMJg7MKCZ4zbY-io8I=" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Understanding Alzheimer’s: A Comprehensive Guide</h5>
                            <p class="card-text">An in-depth look at Alzheimer's, its symptoms, and caregiving strategies.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://plus.unsplash.com/premium_photo-1661695467787-48039a1229a7?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fEhvbWUlMjBzYWZldHklMjB0aXBzfGVufDB8fDB8fHww" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Home Safety Tips for Seniors</h5>
                            <p class="card-text">Ensure a safe living environment for seniors with these practical tips.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8TWVudGFsJTIwSGVhbHRofGVufDB8fDB8fHww" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Resources for Seniors</h5>
                            <p class="card-text">Explore important mental health resources and support for seniors.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Posts Section -->
            <h3 class="text-center section-title mb-4">SPOTLIGHT</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://media.istockphoto.com/id/1125084447/photo/scientific-analysis-of-alzheimers-disease-in-hospital-conceptual-image.webp?a=1&b=1&s=612x612&w=0&k=20&c=faR1petnGpvj5JS_BLGwEiLEaDMJg7MKCZ4zbY-io8I=" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Understanding Alzheimer’s: A Comprehensive Guide</h5>
                            <p class="card-text">An in-depth look at Alzheimer's, its symptoms, and caregiving strategies.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://plus.unsplash.com/premium_photo-1661695467787-48039a1229a7?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fEhvbWUlMjBzYWZldHklMjB0aXBzfGVufDB8fDB8fHww" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Home Safety Tips for Seniors</h5>
                            <p class="card-text">Ensure a safe living environment for seniors with these practical tips.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-card mb-4">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8TWVudGFsJTIwSGVhbHRofGVufDB8fDB8fHww" class="card-img-top" alt="Blog Post Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Resources for Seniors</h5>
                            <p class="card-text">Explore important mental health resources and support for seniors.</p>
                            <a href="#" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Section -->
{{--            <h3 class="text-center section-title mb-4">Leave a Comment</h3>--}}
{{--            <div class="comment-section mt-4">--}}
{{--                <form action="/submit-comment" method="POST">--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="name" class="form-label">Your Name</label>--}}
{{--                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="email" class="form-label">Your Email</label>--}}
{{--                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="comment" class="form-label">Your Comment</label>--}}
{{--                        <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Write your comment here..." required></textarea>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <button type="submit" class="btn btn-primary">Submit Comment</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </section>

@endsection
<!-- Footer -->
