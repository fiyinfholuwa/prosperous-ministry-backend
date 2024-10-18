
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Prosperous Ministry</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  sizes="196x196" href="{{ asset('frontend/images/logo.svg') }}" type="image/svg+xml">
    <link rel="icon" sizes="196x196" href="{{ asset('frontend/images/logo.png') }}" type="image/png">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('frontend/js/modernizr.js')}}"></script>
    <script defer src="{{asset('frontend/js/fontawesome/all.min.js')}}"></script>

    <!-- favicons
    ================================================== -->


</head>

<body id="top">


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- header
================================================== -->
<header class="s-header">

    <div class="s-header__logo">
        <a href="{{route('home')}}">
            <img style="height: 60px" src="{{asset('frontend/images/logo.svg')}}" alt="Homepage">
        </a>
    </div>

    <div class="s-header__content">

        <nav class="s-header__nav-wrap">
            <ul class="s-header__nav">
                <li><a class="" href="{{ route('home') }}" title="Intro">Home</a></li>
                <li><a class="" href="{{ route('event') }}" title="Events">Events</a></li>
            </ul>
        </nav>


        <a href="{{route('login')}}" class="btn btn--primary btn--small">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
            Login
        </a>

    </div> <!-- end header-content -->

    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

</header> <!-- end s-header -->
@yield('content')



<footer class="s-footer">
    <div class="row row-y-top">


        <div class="column large-4 medium-12 s-footer__block--end">
            <a href="https://chat.whatsapp.com/GEWK7wUcXcPK6CFsdTTen3" class="btn h-full-width">Let's Connect</a>

            <div class="ss-copyright">
                <span>Copyright Prosperous Ministry 2024</span>
                <!--                    <span>Designed by <a href="https://www.styleshout.com/">StyleShout</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>-->
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                top
            </a>
        </div> <!-- end ss-go-top -->

    </div>
</footer>


<!-- photoswipe background
================================================== -->


<!-- Java Script
================================================== -->
<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}";
    switch (type) {
        case 'info':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'success':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'warning':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'error':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #ff0000, #ff0000)"}
            }).showToast();
            break;
    }

    // Unset the session
    {{ Session::forget('message') }}
    {{ Session::forget('alert-type') }}
    @endif
</script>

<script>
    // Add any custom JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Example: Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });


</script>
</body>

</html>
