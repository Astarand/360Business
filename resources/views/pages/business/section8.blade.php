@extends('layouts.app')

@section('title', 'Section 8 Company Registration - 360 Business & Services')
@section('meta_description', 'Description Will Goes HERE')
@section('long_keywords', 'Long Keyword Goes here')
@section('short_keywords', 'Short Keyword Goes here')

@section('og_title', '360 Business & Services | Income Tax Consultation in Kolkata')
@section('og_description', 'OG Description will goes Here')


@section('main')

    <!-- main-area -->
    <main class="fix">

        <!-- services-details-area -->
        <section class="services-details-area pt-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 order-lg-1 order-1">
                        <aside class="services-sidebar">
                            <div class="services-widget">
                                <h4 class="sw-title">register your company today</h4>
                                <div class="services-widget-form">
                                    <form action="#">

                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail Address">
                                        </div>
                                        <div class="form-grp">
                                            <input type="phone" placeholder="Phone Number">
                                        </div>
                                        <div class="form-grp">
                                            <input type="text" placeholder="City">
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3 pl-0">
                                            <label class="form-check-label justify-content-start mb-0" for="flexSwitchCheckChecked">Get Easy Update through <img src="{{ asset('assets/img/icons/whatsapp.png') }}"> Whatsapp</label>
                                            <div class="ms-5">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>

                                        <button type="submit" class="submit-btn">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-7 order-lg-0 order-0">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Section 8 company </h2>
                                <h5 class="services-price">Price Starting From <span style="font-size: 14px;"><strike><i>₹17999/-</i></strike> </span> ₹8999/-  <span class="badge bg-success">50% Off</span></h5>
                                <p>A Section 8 company is a non-profit organization in India, promoting charitable activities. It enjoys tax exemptions and limits dividends. Key features include social welfare, no profit distribution, and legal compliance.</p>

                                <div class="sd-inner-wrap sd-inner-wrap-four">
                                    <div class="row">
                                        <div class="col-12 pb-10">
                                            <div class="content">
                                                <ul class="list-wrap">
                                                    <li>
                                                        <img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">
                                                        Cost-effective efficiency and timeliness&nbsp;
                                                        <div class="tooltip-container">
                                                            T&C*
                                                            <div class="tooltip-content">
                                                                <p class="mb-0"><strong>Terms & Condition*</strong></p>
                                                                <ul style="padding-left: 20px;">
                                                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Total payment may vary depending on government fees and the entity of the company.</li>
                                                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Downtime on the government portal may cause work delays.</li>
                                                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Documents should be appropriate as per the requirements.</li>
                                                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Documents must be provided in time to avoid delay.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="justify-content-lg-center"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-btn-two d-flex justify-content-start">
                                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#DocModal">Required Documents for apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-details-area-end -->

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

        <!-- services-details-area -->
        <section class="services-details-area pt-20 pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <div class="company-benefit-wrap">
                                    <div class="accordion-wrap-three">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What is a Section 8 Company?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Widely Known As Section-8 Companies, These Organizations Are Registered Under The Section-8 Of Companies Act 2013. These Companies Intend To Promote Art, Commerce, Sports, Safety, Science, Research, Healthcare, Social Welfare, Religion, Protection Of The Environment, Etc. The Main Object Of These Companies Ensure The Promotion Of Above-Mentioned Fields, Provided The Profit Is Used For Promoting Only Objects Of The Company (Sec 8(1)(B)). Sec 8 (1) (C) States The Prohibition Of Payment Of Any Dividend To Its Members. Ministry Of Corporate Affairs (MCA), Administers And Maintains The Rules And Regulations Through ROC In All Of The States Of India.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Concerns Related to Section 8 Company
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li> Profit Or Income Of The Section 8 Company Cannot Be Used For Any Object Other Than Those Mentioned In Its MOA.</li>
                                                            <li>Distribution Of Profits Or Declaration Of Dividend To Its Members Is Prohibited</li>
                                                            <li>No Member Can Be Appointed As An Office Of The Company With Any Remuneration.</li>
                                                            <li>Its Income Is Taxed At The Same Rates As Other Companies</li>
                                                            <li>A Section 8 Company Cannot Alter The Provisions Of Its MOA And AOA Except With The Previous Approval Of The Central Government.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Advantage of Section 8 Company
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>No Minimum Share Capital Requirement</li>
                                                            <li>Easy Transfer Of Ownership</li>
                                                            <li>Tax Benefits</li>
                                                            <li>No Stamp Duty</li>
                                                            <li>Clear Objectives For Easy Donations And Loans</li>
                                                            <li>Easy To Manage</li>
                                                            <li>Exemptions And Privileges Under Companies Act, 2013</li>
                                                            <li>Relaxation In Compliances</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="services-widget">
                            <h4 class="sw-title">We accecpt payment trough</h4>
                            <div class="services-brochure-wrap pb-20">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-7 text-sm-center">
                                        <h6 class="title bank-title">Bank Details</h6>
                                        <div class="bank">
                                            <p>360 Business & Services</p>
                                            <p>A/C: 915020010733180</p>
                                            <p>Current A/C - Axis Bank</p>
                                            <p>IFSC: UTIB0001884</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-5">
                                        <h6 class="title qr-title">QR Code</h6>
                                        <img  class="qr" src="{{ asset('assets/img/qr.svg') }}">
                                    </div>

                                </div>
                            </div>
                            <div class="pricing-btn-two">
                                <a href="#" class="btn">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->
        <div class="modal fade" id="DocModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-10 my-auto">
                                <ul class="list-wrap1">
                                    <h6>Documents for Directors:</h6>
                                    <li>Voter ID / Aadhar card / Passport copy</li>
                                    <li>PAN Card</li>
                                    <li>Passport Size photo</li>
                                    <li>Latest bank statement</li>
                                    <li>Valid Mobile No & Mail ID</li>
                                    <p><strong>** All the above papers should be self-attested.</strong></p>
                                    <li>Property Deed & Mutation copy, if owned.</li>
                                    <li>Affidavit Rent agreement</li>
                                    <li>Affidavit Office NOC by the rent owner.</li>
                                    <li>Latest Rent Invoice</li>
                                    <li>Latest office property tax receipt</li>
                                    <li>Latest Office Electricity bill</li>
                                    <li>Office Images</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- main-area-end -->

@endsection
