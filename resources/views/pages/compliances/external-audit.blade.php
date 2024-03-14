@extends('layouts.app')

@section('title', 'External Audit - 360 Business & Services')
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
                                <h2 class="title">External Audit</h2>
                                <p>External audit is an independent examination of a company's financial records, systems, and processes conducted by a qualified external auditor or audit firm. It aims to provide an objective assessment of the organization's financial health, internal controls, and compliance with regulatory requirements. The audit process involves gathering evidence, analyzing financial statements, and issuing an audit report detailing findings and recommendations. External audits enhance transparency, accountability, and investor confidence while ensuring adherence to accounting standards and regulatory guidelines.</p>
                                <div class="sd-inner-wrap sd-inner-wrap-four">
                                    <div class="row">
                                        <div class="col-12 pb-10">
                                            <div class="content">
                                                <ul class="list-wrap">
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">
                                                        Cost-effective efficiency and timeliness  &nbsp;
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
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Proactive compliance management</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Unlock the business's growth potential.</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Transparency and communication</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Comprehensive service offerings</li>

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
                                                        What is an External Audit
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>An External Audit is an independent examination of an organization's financial statements and records conducted by an external auditor or audit firm. It aims to express an opinion on the fairness and accuracy of the financial statements, providing assurance to stakeholders such as shareholders, creditors, and regulators.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Who conducts External Audits, and what is their role?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>External Audits are conducted by qualified external auditors or audit firms that are independent of the organization being audited. Their role is to assess the organization's financial statements and underlying records to determine whether they present a true and fair view of its financial position, performance, and cash flows.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the objectives of an External Audit?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The primary objective of an External Audit is to provide an independent opinion on the reliability and integrity of the organization's financial statements. It aims to ensure transparency, accountability, and compliance with applicable accounting standards, laws, and regulations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What is the importance of an External Audit for stakeholders?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>An External Audit provides assurance to stakeholders, including shareholders, creditors, lenders, regulators, and the public, about the reliability and credibility of the organization's financial statements. It enhances confidence in the organization's financial reporting and governance practices, supports investment decisions, and fosters trust in the capital markets.</p>
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
    </main>
    <!-- main-area-end -->

@endsection
