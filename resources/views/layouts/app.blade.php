<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', '360 Business & Services | Income Tax Consultation in Kolkata')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Recaptcha here -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <meta name="csrf-token" content="{{csrf_token() }}">
        {!!htmlScriptTagJsApi() !!}

        <!--favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <!-- canonicals -->
        <link rel="canonical" href="@yield('canonical_url', url()->current())">

        <!-- meta tags -->
        <meta name="description" content="@yield('meta_description', '360 Business and Services is a leading provider of Income Tax Consultation, Virtual CFO Services, Management consulting, Accounting Outsourcing Services, Business Health Check up, Project Reports & Financing in Kolkata and its surroundings. We are dedicated to helping businesses in Saltlake, Newtown, Rajarhat, Ecospace, Burabazar sectors to grow and succeed.')">
        <meta name="keywords" content="@yield('long_keywords', 'Income Tax Consultation in Kolkata, Virtual CFO Services in Saltlake, Management consulting in Kolkata, Accounting Services in Kolkata, Business Health Checkup, Project Financing in Kolkata,Project Reports &amp; Financing in Kolkata,Income Tax Consultation in Sector V,Virtual CFO Services in Newtown Kolkata,Management consulting in Ecospace,Business Health Checkup in Rajarhat,Accounting Outsourcing Services in Burabazar,Income Tax Consultation for Kolkata Businesses,Management consulting Services in Sector I,Virtual CFO for Saltlake Businesses,Small Business Accounting Services in Sector V,CFO Services for Kolkata Startups,Project Financing Services in Sector IV,Business Health Checkup Services in Ecospace,Kolkata Tax Consultation Services,Saltlake Virtual CFO Services,Sector II Management consulting,Business Health Assessment in Sector III,Business Accounting Services in Newtown,Project Reports Services in Rajarhat,Income Tax Consultation for Saltlake Businesses,Virtual CFO for Ecospace Businesses,Kolkata Burabazar Accounting Services,Sector V Business Health Checkup,Management consulting in Kolkata Newtown,Sector I Project Reports &amp; Financing Services,360 Business and Services in Kolkata')">
        <meta name="keywords" content="@yield('short_keywords', '360 Business and Services Kolkata,Kolkata Businesses, Kolkata Startups, Saltlake Services, Ecospace consulting, Rajarhat Businesses, Burabazar Accounting, Income Tax, Business Financing, CFO Services,Kolkata consulting,Business Checkup,Accounting Outsourcing,Project Reports,Saltlake consulting,Sector IV Businesses,Newtown Services,Ecospace Businesses,Rajarhat Startups,Business Health,Kolkata Accounting,Sector III Services,Burabazar Businesses,Newtown Startups,Management Services,Sector II Startups,Ecospace Startups,Rajarhat Services,Business Services,Kolkata CFO,Saltlake Accounting,Sector I Businesses,Burabazar Startups,Newtown Accounting')">

        <!-- Open Graph meta tags -->
        <meta property="og:image" itemprop="image" content="https://360bizservice.com/assets/img/logo/og-logo.jpg">
        <meta property="og:image:secure_url" content="https://www.360bizservice.com/assets/img/logo/og-logo.jpg">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="500">
        <meta property="og:image:height" content="500">
        <meta property="og:title" content="@yield('og_title', '360 Business & Services | Income Tax Consultation in Kolkata')">
        <meta property="og:description" content="@yield('og_description', '360 Business and Services is a leading provider of Income Tax Consultation, Virtual CFO Services, Management consulting, Accounting Outsourcing Services, Business Health Check up, Project Reports &amp; Financing in Kolkata and its surroundings. We are dedicated to helping businesses in Saltlake, Newtown, Rajarhat, Ecospace, Burabazar sectors to grow and succeed.')">
        <meta property="og:url" content="@yield('og_url', url()->current())">
        <meta property="og:type" content="website">


        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

        <!-- Form here -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>

        @include('layouts.header')



        <!-- Scroll-top -->
{{--        <button class="scroll-top scroll-to-target" data-target="html">--}}
{{--            <i class="fas fa-angle-up"></i>--}}
{{--        </button>--}}
        <!-- Scroll-top-end-->

        @yield('main')

        <!-- Modal -->
        <div class="container">
            <div class="row">

                <div class="modal fade" id="statusErrorsModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center p-lg-5">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                    <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                    <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                                    <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" X2="34.4" y2="92.2" />
                                </svg>
                                <h4 class="text-danger mt-3">Sorry!</h4>
                                <p class="mt-20 mb-30">This request can't be processed right now. Please try after sometime.</p>
                                <a type="button" class="modal-btn" data-bs-dismiss="modal">Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center p-lg-5">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                    <circle class="path circle" fill="none" stroke="#198754" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                    <polyline class="path check" fill="none" stroke="#198754" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                </svg>
                                <h4 class="text-success mt-3">Thanks!</h4>
                                <p class="mt-20 mb-30">Your Message Sent successfully. We will connect with you shortly.</p>
                                <a type="button" class="modal-btn" data-bs-dismiss="modal">Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End- Modal -->

        @include('layouts.footer')
        <!-- JS here -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/gsap.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.parallaxScroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/particles.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
