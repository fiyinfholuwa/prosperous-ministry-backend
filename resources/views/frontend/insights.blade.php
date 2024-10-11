
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

            <form class="mb-4" action="/search" method="GET">
                <div class="row g-2">
                    <!-- Search Input -->
                    <div class="col-12 col-md-6">
                        <input type="text" name="query" class="form-control search-bar" placeholder="Search Blog Posts..." aria-label="Search Blog">
                    </div>

                    <!-- Category Select -->
                    <div class="col-12 col-md-4">
                        <select name="category" class="form-control">
                            <option value="" disabled selected>Categories</option>
                            <option value="senior-care-tips">Senior Care Tips</option>
                            <option value="rehabilitation">Rehabilitation</option>
                            <option value="home-care-advice">Home Care Advice</option>
                            <option value="nutrition">Nutrition</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </form>

            <!-- Blog Post Listings -->

            @if(count($latest_blog) > 0)
                <div class="row">
                    @foreach($latest_blog as $blog)
                        <div class="col-md-4">
                            <div class="card blog-card mb-4">
                                <div class="card-img-wrapper">
                                    <img src="{{asset($blog->image)}}" class="card-img-top" alt="Blog Post Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$blog->title}}</h5>
                                    <p class="card-text">{!! (\Illuminate\Support\Str::limit($blog->body, 40, '...')) !!}</p>
                                    <a href="{{route('insights.detail', $blog->slug)}}" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            @endif
            <!-- Popular Posts Section -->
            <h3 class="text-center section-title mb-4">SPOTLIGHT</h3>
            @if(count($spot_light) >0)
                <div class="row">
                    @foreach($spot_light as $blog)
                        <div class="col-md-4">
                            <div class="card blog-card mb-4">
                                <div class="card-img-wrapper">
                                    <img src="{{asset($blog->image)}}" class="card-img-top" alt="Blog Post Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$blog->title}}</h5>
                                    <p class="card-text">{!! (\Illuminate\Support\Str::limit($blog->body, 40, '...')) !!}</p>
                                    <a href="{{route('insights.detail', $blog->slug)}}" class="btn btn-link read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            @endif
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
