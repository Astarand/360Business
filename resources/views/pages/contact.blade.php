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
                        <h2 class="title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                    <div class="inner-contact-img">
                        <img src="{{ asset('assets/img/images/contact_img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-contact-info">
                        <h2 class="title">Contact Details</h2>
                        <div class="contact-info-item">
                            <h5 class="title-two">Company Location</h5>
                            <ul class="list-wrap">
                                <li>11th Floor,TowerNo-1, PS Srijan Corporate Park,<br> GP Block, Sector-V,<br>Kolkata, West Bengal 700091 </li>
                            </ul>
                        </div>
                        <div class="contact-info-item">
                            <h5 class="title-two">Contact Number</h5>
                            <ul class="list-wrap">
                                <li>+91-98307 47981</li>
                                <li>+91-8444089530</li>
                            </ul>
                        </div>
                        <div class="contact-info-item">
                            <h5 class="title-two">E-mail Address</h5>
                            <ul class="list-wrap">
                                <li>contact@360bizservice.com</li>
                                <li>info@360bizservice.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-area -->
    <section class="contact-area contact-bg" data-background="assets/img/bg/contact_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">GET IN TOUCH</span>
                            <h2 class="title tg-element-title">We Are Connected To Help Your Business!</h2>
                        </div>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
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
                                    <div class="form-grp">
                                        <input type="text" placeholder="Subject *">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea placeholder="Comments *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-shape">
            <img src="{{ asset('assets/img/images/contact_shape.png') }}" alt="">
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.276741181514!2d88.43154687600611!3d22.56875063311016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b1e2cf60cf%3A0xf4bb43fdcf0ecf81!2s360%20Business%20%26%20Services!5e0!3m2!1sen!2sin!4v1703518853576!5m2!1sen!2sin" allowfullscreen loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->


</main>
<!-- main-area-end -->

@endsection
