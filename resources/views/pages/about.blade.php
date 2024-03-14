@extends('layouts.app')

@section('title', 'About Us - 360 Business & Services ')
@section('meta_description', 'Description Will Goes HERE')
@section('long_keywords', 'Long Keyword Goes here')
@section('short_keywords', 'Short Keyword Goes here')
@section('canonical_url', url('/about'))

@section('og_title', '360 Business & Services | Income Tax Consultation in Kolkata')
@section('og_description', 'OG Description will goes Here')

@section('main')

        <!-- main-area -->

        <main class="fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

            <!-- about-area -->
            <section class="about-area about-bg" data-background="{{ asset('assets/img/bg/about_bg.jpg') }}">
                <div class="container">
                    <div class="row align-items-center pb-50">
                        <div class="col-lg-5">
                            <div class="about-img-wrap">
                                <img src="{{ asset('assets/img/images/about_img01.png') }}" alt="" class="main-img">
                                <img src="{{ asset('assets/img/images/about_img_shape01.png') }}" alt="">
                                <img src="{{ asset('assets/img/images/about_img_shape02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-content">
                                <div class="section-title mb-25 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">About Us</span>
                                    <h2 class="title tg-element-title">Smart Accounting for Smarter Businesses</h2>
                                </div>
                                <p>Your trusted partner in comprehensive company compliances, licensing, and taxation solutions. Expertise, precision, and reliability for your business success. Simplifying complexities, ensuring compliance excellence, and maximizing your financial advantage. Choose confidence, choose us!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

             <!-- choose-area -->
             <section class="choose-area-two">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="choose-img-two">
                                <img src="{{ asset('assets/img/images/h4_choose_img.png') }}" alt="">
                                <img src="{{ asset('assets/img/images/choose_img_shape01.png') }}" alt="">
                                <img src="{{ asset('assets/img/images/choose_img_shape02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-content-two">
                                <div class="section-title-two white-title mb-30 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">Why Choose Us</span>
                                    <h2 class="title tg-element-title">We’ll Ensure You Always Get the Best Guidance.</h2>
                                </div>
                                <p>Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.Borem.</p>
                                <div class="choose-circle-wrap">
                                    <div class="circle-item">
                                        <div class="chart" data-percent="100">
                                            <div class="circle-content">
                                                <span class="percentage">100%</span>
                                                <p>Business Growth</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-item">
                                        <div class="chart" data-percent="98">
                                            <div class="circle-content">
                                                <span class="percentage">98%</span>
                                                <p>Trusted Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-item">
                                        <div class="chart" data-percent="100">
                                            <div class="circle-content">
                                                <span class="percentage">100%</span>
                                                <p>Satisfaction</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="choose-shape">
                    <img src="{{ asset('assets/img/images/choose_shape.png') }}" alt="" data-aos="fade-right" data-aos-delay="200">
                </div>
            </section>
            <!-- choose-area-end -->

            <!-- features-area -->
            <section class="features-area-four">
                <div class="container">
                    <div class="features-item-wrap-four">
                        <div class="row align-items-center">
                            <div class="section-title-two mb-30 text-center">
                                <h5 class="title">Core Value of our Company</h5>
                            </div>
                            <div class="col-lg-12">
                               <div class="row d-flex justify-content-between">
                                    <div class="col-lg-2 text-center">
                                        <img class="pb-20" src="{{ asset('assets/img/icons/icon-1.png') }}" alt="icon">
                                        <h2 class="title">Commitment</h2>
                                    </div>

                                    <div class="col-lg-2 text-center">
                                        <img class="pb-20" src="{{ asset('assets/img/icons/icon-2.png') }}" alt="icon">
                                        <h2 class="title">Respect</h2>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img class="pb-20" src="{{ asset('assets/img/icons/icon-3.png') }}" alt="icon">
                                        <h2 class="title">Integrity</h2>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img class="pb-20" src="{{ asset('assets/img/icons/icon-4.png') }}" alt="icon">
                                        <h2 class="title">Vison</h2>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img class="pb-20" src="{{ asset('assets/img/icons/icon-5.png') }}" alt="icon">
                                        <h2 class="title">Empathy</h2>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- faq-area -->
            <section class="faq-area">
                <div class="faq-bg-shape" data-background="{{ asset('assets/img/images/faq_shape01.png') }}"></div>
                <div class="faq-shape-wrap">
                    <img src="{{ asset('assets/img/images/faq_shape02.png') }}" alt="">
                    <img src="{{ asset('assets/img/images/faq_shape03.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-lg-5 col-md-9">
                            <div class="faq-img-wrap">
                                <img src="{{ asset('assets/img/images/faq_img01.jpg') }}" alt="">
                                <img src="{{ asset('assets/img/images/faq_img02.jpg') }}" alt="" data-parallax='{"y" : 100 }'>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="faq-content">
                                <div class="section-title mb-30 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">Our Service Benifits</span>
                                    <h2 class="title tg-element-title">Keep Your Business Safe & Ensure High Availability.</h2>
                                </div>
                                <div class="accordion-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What are end-to-end solutions for businesses or startups?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Our services include office setup, company formation, Business related licenses and registrations, digital marketing, and website development for your businesses.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What is the accounting outsourcing support for your business?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Company accounting and taxation are crucial for sales and operations. Outsourcing professional accountants manages these tasks worry-free, ensuring smooth operations.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What about the service of Business health check Up?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Regular business health checks help identify financial and business strengths, weaknesses, and areas for improvement, ensuring growth and progress towards your goals.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Do you provide company taxation services, including GST?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes, We provide all types of company compliance, taxation, GST registration, returns, and related reliable services by a professional team.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->

            <!-- request-area -->
            <section class="request-area request-bg" data-background="{{ asset('assets/img/bg/request_bg.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="request-content tg-heading-subheading animation-style1">
                                <h2 class="title tg-element-title">Let’s Request a Schedule For <br> Free Consultation</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="request-content-right">
                                <div class="request-contact">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Hotline 24/7</span>
                                        <a href="tel:+918444089530 ">+91-8444089530 </a>
                                    </div>
                                </div>
                                <div class="request-btn">
                                    <a href="{{ route('contact') }}" class="btn">Request a Schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="request-shape">
                    <img src="{{ asset('assets/img/images/request_shape.png') }}" alt="">
                </div>
            </section>
            <!-- request-area-end -->

            <!-- brand-area -->
            <div class="brand-area-six pt-40">
                <div class="container">
                    <div class="brand-item-wrap">
                        <div class="row brand-active">
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img01.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img02.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img04.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img05.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img06.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img07.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img08.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img09.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img10.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img11.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img13.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img14.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img15.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img16.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img17.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img18.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img19.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img20.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img21.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img22.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img23.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="{{ asset('assets/img/brand/brand_img24.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->


        </main>

        <!-- main-area-end -->

@endsection
