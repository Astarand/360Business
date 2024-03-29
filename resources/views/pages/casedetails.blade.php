@extends('layouts.app')

@section('title', 'Case Details - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/casedetails'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Case Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Case Details</li>
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

        <!-- project-details-area -->
        <section class="project-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="project-details-wrap">
                            <div class="row">
                                <div class="col-71">
                                    <div class="project-details-thumb">
                                        <img src="{{ asset('assets/img/project/project_details01.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-29">
                                    <div class="project-details-info">
                                        <h4 class="title">Project Information</h4>
                                        <ul class="list-wrap">
                                            <li><span>Client:</span>Rebeca</li>
                                            <li><span>Date:</span>17 March, 2023</li>
                                            <li><span>Category:</span>Modern</li>
                                            <li><span>Author:</span>Mark Willy</li>
                                            <li><span>Place:</span>Paris</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-details-content">
                                <h2 class="title">Business Planing & Solution</h2>
                                <p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when anner year unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.when an unknown printer took ar galley  type year anddey scrambled  make type aewer specimen book bethas survived.</p>
                                <p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise. That’s why we’ve developed close working relationships with a number of strategic partner.</p>
                                <div class="pd-optimized-wrap">
                                    <h3 class="title-two">Speed Optimized</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="pd-inner-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-41">
                                            <div class="content">
                                                <h3 class="title-two">Raise capital faster & negotiate on your own terms</h3>
                                                <p class="info-one">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>
                                                <ul class="list-wrap">
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">100% Better results</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Valuable Ideas</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Budget Friendly Theme</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Happy Customers</li>
                                                </ul>
                                                <p class="info-two">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                        <div class="col-59">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/img/project/project_details02.jpg') }}" alt="">
                                                <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play-btn popup-video"><i class="fas fa-play"></i></a>
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
        <!-- project-details-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
