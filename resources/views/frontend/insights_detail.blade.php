
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

    <section>
        <div class="container">
            <div class="get-left">

                <div class="tips-container2">
                    <img src="{{asset($blog->image)}}" alt="" class="blog-banner">

                    <div class="tips-download">

                    </div>
                </div>

                <div class="tips-process">
                    <h3 style="color: #0a53be; padding-bottom: 30px">{{$blog->title}}</h3>
                    {!! $blog->body !!}
                </div>


                <div class="share_link">
                    <?php $currentUrl = URL::current(); ?>

                    <h3>Social Share <i class="fa fa-share"></i></h3>
                    <a href="http://www.facebook.com/share.php?u={{$currentUrl}}" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/share?url={{$currentUrl}}&amp;text={{$blog->title}}&amp;hashtags=" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://web.whatsapp.com/send?text={{$currentUrl}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    {{--                <a href="https://plus.google.com/share?url={{$currentUrl}}L" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{$currentUrl}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>

            </div>


        </div>

    </section>


    <style>
        .share_link{
            margin-top: 50px;
        }
        .share_link a {
            padding: 5px;
            color: red;
            font-weight: 700;
            font-size: 25px;
        }
    </style>
@endsection
<!-- Footer -->
