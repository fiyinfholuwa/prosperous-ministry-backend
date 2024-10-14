<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 18:19:58 GMT -->
<head>
    <title>Prosperous - Dashboard</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
          content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset('https://health-care-rho-six.vercel.app/images/Logo5.png')}}" type="image/x-icon"> <!-- [Font] Family -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/inter/inter.css')}}" id="main-font-link"/>
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/tabler-icons.min.css')}}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/feather.css')}}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/fontawesome.css')}}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/material.css')}}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}" id="main-style-link">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style-preset.css')}}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR4zYJ5iENBO06fYlB8kEzZ55niPy5XKpQ+cl4zp2"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-14K1GBX9FG');
    </script>
    <!-- WiserNotify -->
    <script>
        !(function () {
            if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
            else {
                window.t4hto4 = !0;
                var t = document,
                    e = window,
                    n = function () {
                        var e = t.createElement('script');
                        (e.type = 'text/javascript'),
                            (e.async = !0),
                            (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
                            document.body.appendChild(e);
                    };
                'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
            }
        })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = 'https://www.clarity.ms/tag/' + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
      data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img style="height: 60px" src="{{asset('frontend/images/logo.png')}}" class="img-fluid" alt="logo">
                {{--                <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span>--}}
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{asset('backend/assets/images/user/avatar-1.jpg')}}" alt="user-image"
                                 class="user-avtar wid-45 rounded-circle"/>
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{Auth::user()->first_name}}</h6>
                            <small>Admin</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                           href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>

                            <a href="">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{route('dashboard')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="ph-duotone ph-user-list ph-user-list">
                <use xlink:href="#custom-status-up"></use>
              </svg>
            </span>
                        <span class="pc-mtext">Dashboard</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>

                </li>



                <li class="pc-item pc-hasmenu">
                    <a href="{{route('admin.event.view')}}" class="pc-link">
                        <i style="font-size: 20px;" class="ph-duotone ph-calendar-plus"></i>
                        <span class="pc-mtext">Add Event</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>

                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{route('admin.event.all')}}" class="pc-link">
                        <i style="font-size: 20px;" class="ph-duotone ph-calendar-check"></i>
                        <span class="pc-mtext">All Events</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>

                </li>


                <li class="pc-item pc-hasmenu">
                    <a href="{{route('contact.all')}}" class="pc-link">
                        <i style="font-size: 20px;" class="ph-duotone ph-users-four"></i>
                        <span class="pc-mtext">All Attendees</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>

                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{route('admin.change.password')}}" class="pc-link">
                        <i style="font-size: 20px;" class="ph-duotone ph-lock-key-open"></i>
                        <span class="pc-mtext">Change Password</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>

                </li>



                <li class="pc-item pc-hasmenu">
                    <a href="{{route('logout')}}" class="pc-link">
                        <i style="font-size: 20px;" class="ph-duotone ph-sign-out"></i>

                        <span class="pc-mtext" style="color: red">Logout</span>
                        {{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
                        {{--                        <span class="pc-badge">2</span>--}}
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>

            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">

                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-setting-2"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
{{--                        <a href="" class="dropdown-item">--}}
{{--                            <i class="ti ti-user"></i>--}}
{{--                            <span>My Account</span>--}}
{{--                        </a>--}}

                        <a href="{{route('logout')}}" class="dropdown-item">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>

                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
{{--                        <svg class="pc-icon">--}}
{{--                            <use xlink:href="#custom-notification"></use>--}}
{{--                        </svg>--}}
                        <span class="badge bg-success pc-h-badge"></span>
                    </a>
{{--                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">--}}
{{--                        <div class="dropdown-header d-flex align-items-center justify-content-between">--}}
{{--                            <h5 class="m-0">Notifications</h5>--}}
{{--                            <a href="#!" class="btn btn-link btn-sm">Mark all read</a>--}}
{{--                        </div>--}}
{{--                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"--}}
{{--                             style="max-height: calc(100vh - 215px)">--}}
{{--                            <p class="text-span">Today</p>--}}
{{--                            <div class="card mb-2">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <svg class="pc-icon text-primary">--}}
{{--                                                <use xlink:href="#custom-layer"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 ms-3">--}}
{{--                                            <span class="float-end text-sm text-muted">2 min ago</span>--}}
{{--                                            <h5 class="text-body mb-2">UI/UX Design</h5>--}}
{{--                                            <p class="mb-0"--}}
{{--                                            >Lorem Ipsum has been the industry's standard dummy text ever since the--}}
{{--                                                1500s, when an unknown printer took a galley of--}}
{{--                                                type and scrambled it to make a type</p--}}
{{--                                            >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card mb-2">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <svg class="pc-icon text-primary">--}}
{{--                                                <use xlink:href="#custom-sms"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 ms-3">--}}
{{--                                            <span class="float-end text-sm text-muted">1 hour ago</span>--}}
{{--                                            <h5 class="text-body mb-2">Message</h5>--}}
{{--                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever--}}
{{--                                                since the 1500.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-span">Yesterday</p>--}}
{{--                            <div class="card mb-2">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <svg class="pc-icon text-primary">--}}
{{--                                                <use xlink:href="#custom-document-text"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 ms-3">--}}
{{--                                            <span class="float-end text-sm text-muted">2 hour ago</span>--}}
{{--                                            <h5 class="text-body mb-2">Forms</h5>--}}
{{--                                            <p class="mb-0"--}}
{{--                                            >Lorem Ipsum has been the industry's standard dummy text ever since the--}}
{{--                                                1500s, when an unknown printer took a galley of--}}
{{--                                                type and scrambled it to make a type</p--}}
{{--                                            >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card mb-2">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <svg class="pc-icon text-primary">--}}
{{--                                                <use xlink:href="#custom-user-bold"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 ms-3">--}}
{{--                                            <span class="float-end text-sm text-muted">12 hour ago</span>--}}
{{--                                            <h5 class="text-body mb-2">Challenge invitation</h5>--}}
{{--                                            <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join--}}
{{--                                                the challenge</p>--}}
{{--                                            <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>--}}
{{--                                            <button class="btn btn-sm btn-primary">Accept</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card mb-2">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <svg class="pc-icon text-primary">--}}
{{--                                                <use xlink:href="#custom-security-safe"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 ms-3">--}}
{{--                                            <span class="float-end text-sm text-muted">5 hour ago</span>--}}
{{--                                            <h5 class="text-body mb-2">Security</h5>--}}
{{--                                            <p class="mb-0"--}}
{{--                                            >Lorem Ipsum has been the industry's standard dummy text ever since the--}}
{{--                                                1500s, when an unknown printer took a galley of--}}
{{--                                                type and scrambled it to make a type</p--}}
{{--                                            >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center py-2">--}}
{{--                            <a href="#!" class="link-danger">Clear all Notifications</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">@yield('page')</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 style="margin: 20px 1px;" class="mb-0">@yield('title')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')


{{--        <div class="pct-c-btn">--}}
{{--            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">--}}
{{--                <i class="ph-duotone ph-gear-six"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">--}}
{{--            <div class="offcanvas-header">--}}
{{--                <h5 class="offcanvas-title">Settings</h5>--}}
{{--                <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas"--}}
{{--                        aria-label="Close"><i--}}
{{--                        class="ti ti-x"></i></button>--}}
{{--            </div>--}}
{{--            <div class="pct-body customizer-body">--}}
{{--                <div class="offcanvas-body py-0">--}}
{{--                    <ul class="list-group list-group-flush">--}}
{{--                        <li class="list-group-item">--}}
{{--                            <div class="pc-dark">--}}
{{--                                <h6 class="mb-1">Theme Mode</h6>--}}
{{--                                <p class="text-muted text-sm">Choose light or dark mode or Auto</p>--}}
{{--                                <div class="row theme-color theme-layout">--}}
{{--                                    <div class="col-4">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn active" data-value="true"--}}
{{--                                                    onclick="layout_change('light');" data-bs-toggle="tooltip"--}}
{{--                                                    title="Light">--}}
{{--                                                <svg class="pc-icon text-warning">--}}
{{--                                                    <use xlink:href="#custom-sun-1"></use>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn" data-value="false"--}}
{{--                                                    onclick="layout_change('dark');" data-bs-toggle="tooltip"--}}
{{--                                                    title="Dark">--}}
{{--                                                <svg class="pc-icon">--}}
{{--                                                    <use xlink:href="#custom-moon"></use>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn" data-value="default"--}}
{{--                                                    onclick="layout_change_default();"--}}
{{--                                                    data-bs-toggle="tooltip"--}}
{{--                                                    title="Automatically sets the theme based on user's operating system's color scheme.">--}}
{{--                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">--}}
{{--                          <i class="ph-duotone ph-cpu"></i>--}}
{{--                        </span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <h6 class="mb-1">Theme Contrast</h6>--}}
{{--                            <p class="text-muted text-sm">Choose theme contrast</p>--}}
{{--                            <div class="row theme-contrast">--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="d-grid">--}}
{{--                                        <button class="preset-btn btn" data-value="true"--}}
{{--                                                onclick="layout_theme_contrast_change('true');" data-bs-toggle="tooltip"--}}
{{--                                                title="True">--}}
{{--                                            <svg class="pc-icon">--}}
{{--                                                <use xlink:href="#custom-mask"></use>--}}
{{--                                            </svg>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="d-grid">--}}
{{--                                        <button class="preset-btn btn active" data-value="false"--}}
{{--                                                onclick="layout_theme_contrast_change('false');"--}}
{{--                                                data-bs-toggle="tooltip" title="False">--}}
{{--                                            <svg class="pc-icon">--}}
{{--                                                <use xlink:href="#custom-mask-1-outline"></use>--}}
{{--                                            </svg>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <h6 class="mb-1">Custom Theme</h6>--}}
{{--                            <p class="text-muted text-sm">Choose your primary theme color</p>--}}
{{--                            <div class="theme-color preset-color">--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Blue" class="active" data-value="preset-1"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Indigo" data-value="preset-2"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Purple" data-value="preset-3"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Pink" data-value="preset-4"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Red" data-value="preset-5"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Orange" data-value="preset-6"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Yellow" data-value="preset-7"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Green" data-value="preset-8"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Teal" data-value="preset-9"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                                <a href="#!" data-bs-toggle="tooltip" title="Cyan" data-value="preset-10"><i--}}
{{--                                        class="ti ti-checks"></i></a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <h6 class="mb-1">Sidebar Caption</h6>--}}
{{--                            <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>--}}
{{--                            <div class="row theme-color theme-nav-caption">--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="d-grid">--}}
{{--                                        <button class="preset-btn btn-img btn active" data-value="true"--}}
{{--                                                onclick="layout_caption_change('true');" data-bs-toggle="tooltip"--}}
{{--                                                title="Caption Show">--}}
{{--                                            <img src="../assets/images/customizer/caption-on.svg" alt="img"--}}
{{--                                                 class="img-fluid">--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div class="d-grid">--}}
{{--                                        <button class="preset-btn btn-img btn" data-value="false"--}}
{{--                                                onclick="layout_caption_change('false');" data-bs-toggle="tooltip"--}}
{{--                                                title="Caption Hide">--}}
{{--                                            <img src="../assets/images/customizer/caption-off.svg" alt="img"--}}
{{--                                                 class="img-fluid">--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <div class="pc-rtl">--}}
{{--                                <h6 class="mb-1">Theme Layout</h6>--}}
{{--                                <p class="text-muted text-sm">LTR/RTL</p>--}}
{{--                                <div class="row theme-color theme-direction">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn-img btn active" data-value="false"--}}
{{--                                                    onclick="layout_rtl_change('false');" data-bs-toggle="tooltip"--}}
{{--                                                    title="LTR">--}}
{{--                                                <img src="../assets/images/customizer/ltr.svg" alt="img"--}}
{{--                                                     class="img-fluid">--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn-img btn" data-value="true"--}}
{{--                                                    onclick="layout_rtl_change('true');" data-bs-toggle="tooltip"--}}
{{--                                                    title="RTL">--}}
{{--                                                <img src="../assets/images/customizer/rtl.svg" alt="img"--}}
{{--                                                     class="img-fluid">--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item pc-box-width">--}}
{{--                            <div class="pc-container-width">--}}
{{--                                <h6 class="mb-1">Layout Width</h6>--}}
{{--                                <p class="text-muted text-sm">Choose Full or Container Layout</p>--}}
{{--                                <div class="row theme-color theme-container">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn-img btn active" data-value="false"--}}
{{--                                                    onclick="change_box_container('false')" data-bs-toggle="tooltip"--}}
{{--                                                    title="Full Width">--}}
{{--                                                <img src="../assets/images/customizer/full.svg" alt="img"--}}
{{--                                                     class="img-fluid">--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="preset-btn btn-img btn" data-value="true"--}}
{{--                                                    onclick="change_box_container('true')" data-bs-toggle="tooltip"--}}
{{--                                                    title="Fixed Width">--}}
{{--                                                <img src="../assets/images/customizer/fixed.svg" alt="img"--}}
{{--                                                     class="img-fluid">--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <div class="d-grid">--}}
{{--                                <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- [Page Specific JS] start -->
        <script src="{{asset('backend/assets/js/plugins/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/pages/dashboard-default.js')}}"></script>
        <!-- [Page Specific JS] end -->
        <!-- Required Js -->
        <script src="{{asset('backend/assets/js/plugins/popper.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/fonts/custom-font.js')}}"></script>
        <script src="{{asset('backend/assets/js/pcoded.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/feather.min.js')}}"></script>


        <script>layout_change('light');</script>


        <script>layout_theme_contrast_change('false');</script>


        <script>change_box_container('false');</script>


        <script>layout_caption_change('true');</script>


        <script>layout_rtl_change('false');</script>


        <script>preset_change("preset-1");</script>

</body>
<!-- [Body] end -->

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
    $(document).ready(function () {
        $('#my-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true
        });
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script> var editor = new FroalaEditor('#myTextarea'); </script>


<script>
    ClassicEditor
        .create(document.querySelector('#myTextarea'))
        .catch(error => {
            console.error(error);
        });
</script>

<style>
    /* Custom styles to enlarge the editor */
    .ck-editor__editable_inline {
        min-height: 200px;
        width: 100%;
    }
</style>


<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 18:20:32 GMT -->
</html>
