
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
            <h2 class="text-center section-title mb-5">Search <span style="color: red;">{{$searchQuery}}</span></h2>

            <form class="mb-4" action="{{route('insights.search')}}" method="GET">
                <div class="row g-2">
                    <div class="col-12 col-md-6">
                        <input type="text" name="query" class="form-control search-bar" placeholder="Search Blog Posts..." aria-label="Search Blog">
                    </div>

                    <div class="col-12 col-md-4">
                        <select name="category" class="form-control">
                            <option value="" disabled selected>Categories</option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </form>

            <!-- Blog Post Listings -->

            @if(count($blogs) > 0)
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <div class="card blog-card mb-4">
                                <div class="card-img-wrapper">
                                    <img src="{{asset($blog->image)}}" class="card-img-top" alt="Blog Post Image">
                                    <div class="card-img-overlay d-flex align-items-start justify-content-end">
                                        <span class="badge badge-category bg-primary">{{optional($blog->category_info)->name}}</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$blog->title}}</h5>
                                    <p class="card-text">{!! (\Illuminate\Support\Str::limit($blog->body, 40, '...')) !!}</p>
                                    <a href="{{route('insights.detail', $blog->slug)}}" class="btn btn-link text-primary p-0 read-more">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h3 style="color: red;">No Results Found</h3>
            @endif
            <!-- Popular Posts Section -->

        </div>
    </section>

@endsection
<!-- Footer -->
