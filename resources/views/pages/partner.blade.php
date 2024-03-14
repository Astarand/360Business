@extends('layouts.app')

@section('title', 'Contact Us - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/contact'))

@section('main')

 <!-- main-area -->
 <main class="fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Partner With us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Partner With us</li>
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

    <!-- contact-area -->
    <section class="inner-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-contact-info">
                        <h2 class="title">Why Affiliate With 360 Business & Services</h2>
                        <div class="contact-info-item">
                            <ul class="list-wrap1">
                                <li>Low Invesment to Start With</li>
                                <li>Offer Entire Range of Service to your Network</li>
                                <li>Over 30+ Successful Franchise Owners across India</li>
                                <li>Extensive Marketing Support</li>
                                <li>Training & Education of all service</li>
                                <li>Dedicated Support & Guidance</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="number" placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>City</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->



</main>
<!-- main-area-end -->

@endsection
