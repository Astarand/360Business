@extends('layouts.app')

@section('title', 'Pricing - 360 Business & Services | Income Tax Consultation in Kolkata')
@section('meta_description', 'Description Will Goes HERE')
@section('long_keywords', 'Long Keyword Goes here')
@section('short_keywords', 'Short Keyword Goes here')
@section('canonical_url', url('/pricing'))

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
                            <h2 class="title">Pricing Plans</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing Plans</li>
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

        <!-- pricing-area -->
        <section class="pricing-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Pricing Chart</span>
                            <h2 class="title tg-element-title">Best Pricing Plane For You</h2>
                            <p>Ever find yourself staring at your computer screen a good consulting <br> slogan to come to mind? Oftentimes.</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="pricing-box">
                                <div class="pricing-head">
                                    <h2 class="title">Start Up </h2>
                                    <p>Ever find yourself staring at your follow computer screen a good</p>
                                </div>
                                <div class="pricing-price">
                                    <h2 class="price monthly_price"><strong>₹</strong>19,999<span>/Month</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        @foreach ([
                                                'DIN & DSC',
                                                'MCA Name approval',
                                                'Company Formation',
                                                'Business Commencement',
                                                'Auditor Recruitment',
                                                'Tan Registration',
                                                'Trade License',
                                                'P-Tax Registration',
                                                'Business Bank Account',
                                                'GST Registration',
                                                'Shop & Establishment',
                                            ] as $item)
                                            <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ route('contact') }}" class="btn">Get The Plan Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="pricing-box active">
                                <span class="popular-tag">Popular</span>
                                <div class="pricing-head">
                                    <h2 class="title">Standard</h2>
                                    <p>Ever find yourself staring at your follow computer screen a good</p>
                                </div>
                                <div class="pricing-price">
                                    <h2 class="price monthly_price"><strong>₹</strong>24,999<span>/Month</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        @foreach ([
                                                'DIN & DSC',
                                                'MCA Name approval',
                                                'Company Formation',
                                                'Business Commencement',
                                                'Auditor Recruitment',
                                                'Tan Registration',
                                                'Trade License',
                                                'P-Tax Registration',
                                                'Business Bank Account',
                                                'GST Registration',
                                                'Shop & Establishment',
                                                'MSME registration',
                                                'PF & ESI Registration',
                                            ] as $item)
                                            <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ route('contact') }}" class="btn">Get The Plan Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="pricing-box">
                                <div class="pricing-head">
                                    <h2 class="title">Accounting Outsource</h2>
                                    <p>Ever find yourself staring at your follow computer screen a good</p>
                                </div>
                                <div class="pricing-price">
                                    <h2 class="price monthly_price"><strong>₹</strong>4,999<span>/Month</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        @foreach ([
                                                 'Professional Accountant Support',
                                                 'CA provides backend support',
                                                 'Weekly Accounting support',
                                                 'Monthly GST returns',
                                                 'Company accounts management',
                                                 'PF & ESI Management',
                                                 'TDS return submission',
                                                 'Virtual CFO Services',
                                             ] as $item)
                                            <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ route('contact') }}" class="btn">Get The Plan Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->

        <!-- request-area -->
        <section class="request-area-two" style="background-color: #fff;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="request-content-two">
                            <div class="section-title-two white-title mb-15 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title" style="color: #2f7fec;">We Accecpt Payment Trough</h2>
                            </div>
                            <div class="row">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="{{ asset('assets/img/icons/visa.png') }}" style="width: 70px;"></li>
                                    <li class="list-inline-item"><img src="{{ asset('assets/img/icons/upi2.png') }}" style="width: 95px; border-radius: 2px;"></li>
                                    <li class="list-inline-item"><img src="{{ asset('assets/img/icons/bank.png') }}" style="width: 95px;"></li>
                                    <li class="list-inline-item"><img src="{{ asset('assets/img/icons/razorpay2.png') }}" style="width: 170px; border-radius: 2px;"></li>
                                </ul>
                                <div class="pricing-btn-one">
                                    <a href="#" class="btn">Pay Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="title">Bank Details</h5>
                                <p>360 Business & Services</p>
                                <p>A/C: 915020010733180</p>
                                <p>Current A/C - Axis Bank</p>
                                <p>IFSC: UTIB0001884</p>
                            </div>
                            <div class="col-6">
                                <h5 class="title">QR Code</h5>
                                <img src="{{ asset('assets/img/qr.svg') }}" style="width: 130px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-shape-wrap">
                <img src="{{ asset('assets/img/images/h2_request_shape01.png') }}" alt="">
                <img src="{{ asset('assets/img/images/h2_request_shape02.png') }}" alt="" data-aos="fade-left" data-aos-delay="200">
            </div>
        </section>
        <!-- request-area-end -->

        <!-- brand-area -->
        <div class="brand-area-six pt-80 pb-80">
            <div class="container">
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
                </div>
            </div>
        </div>
        <!-- brand-area-end -->


    </main>
<!-- main-area-end -->

@endsection
