@extends('layouts.app')

@section('title', 'Terms of Use - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/faq'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Privacy Policy</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape-wrap">
                <img src="{{ asset('assets/img/images/breadcrumb_shape01.png') }}" alt="">
                <img src="{{ asset('assets/img/images/breadcrumb_shape02.png') }}" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- Text Area -->
            <section class=" pt-50 pb-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <h2 class="text-center">Privacy Policy</h2>

                        <p>
                            This Privacy Policy governs the manner in which <a href="https://360bizservice.com">360bizservice.com</a> collects, uses, maintains, and discloses information collected from users (each, a "User") of the <a href="https://360bizservice.com">https://www.360bizservice.com</a>https://www.360bizservice.com website ("Site"). This privacy policy applies to the site and all products and services offered by 360 Business & Services.
                        </p>

                        <h5> PERSONAL IDENTIFICATION INFORMATION</h5>
                        <p class="pb-30">We collect personal identification information from users through various means, such as visiting our site, registering, placing an order, and engaging in other activities. Users may be asked for their name, email address, mailing address, phone number, date of birth, etc. They can visit anonymously, but only voluntarily if they submit such information. Users can refuse to provide personal information, but it may prevent them from engaging in certain site-related activities.</p>

                        <h5>NON-PERSONAL IDENTIFICATION INFORMATION</h5>
                        <p class="pb-30">We may collect non-personal identification information about users whenever they interact with our site. Non-personal identification information may include the browser name, the type of computer, and technical information about the user's means of connection to our site, such as the operating system and the Internet service providers' utilization, and other similar information.</p>

                        <h5>HOW WE USE COLLECTED INFORMATION</h5>
                        <p class="pb-30">360 Business & Services uses user personal information to improve customer service, personalize user experience, and improve products and services. This information is collected and used to respond to customer requests and support needs more efficiently, understand user usage of services and resources, and use feedback to improve the site. Payment information is used to process orders and does not be shared with outside parties except for necessary services. Promotions, contests, surveys, and other Site features are run to send users information they agreed to receive. Email addresses are used to send user information and updates, as well as respond to inquiries and questions. Users can opt-in to our mailing list to receive company news, updates, and related product or service information. If they wish to unsubscribe, detailed instructions are provided at the bottom of each email or they can contact “360 Business & Services” via the site. </p>

                        <ul class="pb-30">
                           <li>
                               <h6>HOW DO WE PROTECT YOUR INFORMATION?</h6><br>
                               <p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>
                           </li>
                            <li>
                                <h6>SHARING YOUR PERSONAL INFORMATION</h6><br>
                                <p>•	We may use third-party service providers to operate our business and site, such as sending newsletters or surveys. Your information may be shared for limited purposes, provided you give us your consent. You agree to allow us to collect, store, process, and transfer your information to our sister concern entities for their platform services. They may communicate with you via email, phone calls, and messages. If you choose to use services provided by our sister concern, your information may be governed by their privacy policies, and we are not responsible for their privacy practices. If we are involved in a merger, acquisition, sale, reorganization, joint venture, transfer, or disposition of our business, we will maintain user information confidentiality and provide prior notification to affected users in case of information sharing.</p>
                            </li>
                        </ul>

                        <h5>CHANGES TO THIS PRIVACY POLICY</h5>
                        <p>360 Business & Services reserves the right to update its privacy policy at any time, and users are encouraged to regularly check the page for updates. They acknowledge that it is their responsibility to review the policy periodically and be aware of any modifications. The continued use of the platform and services signifies acceptance of the modified policy, which will apply from the first day of use. If significant changes occur, more prominent notice will be provided.
                        </p>
                    </div>
                </div>
            </section>
        <!-- Text Area -end -->

    </main>
    <!-- main-area-end -->
@endsection
