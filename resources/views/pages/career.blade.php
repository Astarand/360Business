@extends('layouts.app')

@section('title', 'Career - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/career'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Career</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Career</li>
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

        <!-- team-details-area -->
        <section class="team-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-details-content">
                            <h2 class="title">Marketing Representative</h2>
                            <span>Kolkata</span>
                            <p>estibulum ac diam sit amet quam vehicula elementum sed sit amet dui Sed porttitor lect us nibh. Praesent sapien massa, convallis a pellentesquam vehiculaestibulum ac diam sit amet quam vehicula elementumsit amet dui Sed porttitor lectus nibPraesent sapien massa convallis a pellentese nec diam sit amet quam vehicula.</p>
                            <div class="team-skill-wrap">
                                <p><strong>Skill Required:</strong> Marketing</p>
                            </div>
                            <div class="team-details-info-wrap mt-20">
                                <div class="team-details-info">
                                    <div class="td-info-bottom">
                                        <a class="btn btn-three career-btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- Apply Now -->
    <div class="apply-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="apply-close text-white">
            <span><i class="fas fa-times"></i></span>
        </div>
        <div class="apply-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('assets/img/logo/w_logo.png') }}" class="mb-30" alt="Logo">

                        <h4 class="title">Apply Now</h4>
                        <p class="text-white mb-30">We are experts in comprehensive end-to-end solutions for your business, like company formation, taxation, and any kind of licencing and registration.</p>
                        <div class="apply-form">
                            <form action="#">
                                <div class="col-lg-12">
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
                                                        <input type="text" placeholder="Position *">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="Exprience *">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="Location *">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <input type="file" class="form-control" id="customFile" />
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="query-button" type="submit">Apply Now</button>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Apply now end -->
@endsection
