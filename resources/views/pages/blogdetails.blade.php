@extends('layouts.app')

@section('title', 'Blog Details - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/blogdetails'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Blogs Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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

        <!-- blog-details-area -->
        <section class="blog-details-area pt-120">
            <div class="container">
                <div class="blog-details-wrap">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="blog-details-thumb">
                                <img src="{{ asset('assets/img/blog/blog-details01.jpg') }}" alt="">
                            </div>
                            <div class="blog-details-content">
                                <h2 class="title">Why Should Business Payroll Outsourcing</h2>
                                <div class="blog-meta-three">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                        <li><img src="{{ asset('assets/img/blog/blog_avatar01.png') }}" alt=""> by <a href="#">Kat Doven</a></li>
                                        <li><i class="fas fa-tags"></i> <a href="#">Finance,</a><a href="#">Business</a></li>
                                        <li><i class="flaticon-speech-bubble"></i><a href="#">05 Comments</a></li>
                                    </ul>
                                </div>
                                <p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>
                                <p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>
                                <blockquote>
                                    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>
                                </blockquote>
                                <h4 class="title-two">Speed Optimized</h4>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>
                                <div class="bd-inner-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-46">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/blog/blog-details02.jpg') }}" alt="">
                                                <a href="{{ url('#')}}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-54">
                                            <div class="content">
                                                <h3 class="title-two">Conduct replied off whether arrived adapted</h3>
                                                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>
                                                <ul class="list-wrap">
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Commercial Property Insurance</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Budget Friendly Theme</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Happy Customers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
