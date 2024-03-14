@extends('layouts.app')

@section('title', 'Services - 360 Business & Services | Income Tax Consultation in Kolkata')
@section('meta_description', 'Description Will Goes HERE')
@section('long_keywords', 'Long Keyword Goes here')
@section('short_keywords', 'Short Keyword Goes here')
@section('canonical_url', url('/services'))

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
                            <h2 class="title">Our Services</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
        <section class="about-area about-bg" data-background="assets/img/bg/about_bg.jpg">
            <div class="container">
                <div class="row align-items-center pb-30">
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
                                <span class="sub-title tg-element-title">What We are Doing</span>
                                <h2 class="title tg-element-title">Changing The Way To Do Best Business Solutions</h2>
                            </div>
                            <p>At 360 Business & Services, we specialize in providing tailored management consulting solutions to businesses seeking to enhance their performance, streamline operations, and achieve sustainable growth. With a team of seasoned consultants and industry experts, we offer a comprehensive suite of services designed to address the unique challenges and opportunities faced by your organization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- features-area -->
        <section class="features-area pt-50 pb-60">
            <div class="container">
                <div class="row justify-content-center">

                    <!---== Company Incorporation & Business setup ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-puzzle-piece"></i>
                                    </div>
                                    <h2 class="title">Company Incorporation & Business setup</h2>
                                </div>
                                <p>
                                    Welcome to 360 Business & Services, your trusted partner for seamless company
                                    incorporation and business setup solutions. With our expertise and dedication, we
                                    simplify the process of establishing your business entity, ensuring a smooth
                                    transition into the corporate world. From company incorporation to
                                    comprehensive business setup services, we provide
                                    your specific needs and goals. Our team of professionals is committed to guiding
                                    you through every step of the process, from registering your company to
                                    obtaining necessary permits and licenses. Trust 360 Business & Services to turn
                                    your vision into reality with our efficient and reliable services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== GST Registration & Returns ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <h2 class="title">GST Registration & Returns</h2>
                                </div>
                                <p>
                                    360 Business & Services is your trusted partner for seamless GST registration and
                                    returns services. Our team of experts specializes in handling all aspects of GST
                                    compliance, from registration to filing returns. With our comprehensive knowledge
                                    and experience, we ensure that your business meets all regulatory requirements
                                    efficiently and accurately. Whether you're a new business or seeking to streamline
                                    your GST processes, we provide personalized solutions tailored to your specific
                                    needs. Trust 360 Business & Services to navigate the complexities of GST registration
                                    and returns, allowing you to focus on what you do best – running your business
                                    successfully.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== Accounts & Auditing Services ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">Accounts & Auditing Services</h2>
                                </div>
                                <p>
                                    With our professional accounts and auditing services. With our dedicated team of
                                    skilled professionals, we offer a comprehensive range of accounting and auditing
                                    solutions tailored to meet your specific needs. From bookkeeping and financial
                                    reporting to internal and external auditing, we ensure accuracy, compliance, and
                                    transparency in all financial matters. Whether you're a small business or a large
                                    corporation, we are committed to delivering high-quality services that help you
                                    make informed financial decisions and achieve your business objectives. Our
                                    reliable, efficient, and personalized accounts and auditing services exceed your
                                    expectations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== Management Consulting ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">Management Consulting</h2>
                                </div>
                                <p>
                                    Our seasoned team of consultants specializes in providing strategic guidance
                                    and solutions to help businesses navigate challenges and achieve their goals.
                                    From strategic planning and organizational development to process
                                    improvement and change management. With a focus on innovation, efficiency,
                                    and results, we collaborate closely with clients to develop practical strategies and
                                    implement sustainable solutions. For insightful, data-driven management
                                    consulting that empowers your organization to thrive in today's dynamic business
                                    environment.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== IT & ITES Permission – WEBEL ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <h2 class="title">IT & ITES Permission – WEBEL</h2>
                                </div>
                                <p>
                                    As an authorized consultant for WEBEL, we specialize in facilitating IT and ITES
                                    permissions for businesses looking to establish operations in West Bengal, India. Our
                                    experienced team navigates the intricate processes involved in obtaining necessary
                                    permissions and approvals from WEBEL with efficiency and precision. Whether you're
                                    a startup or an established enterprise, we provide comprehensive assistance to
                                    ensure compliance and smooth operation of your IT or ITES ventures in West Bengal.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== Personal & Business Tax Consultation ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">Personal & Business Tax Consultation</h2>
                                </div>
                                <p>
                                    An experienced team of tax experts is committed to providing comprehensive
                                    solutions to meet your tax needs. Whether you're an individual looking for assistance
                                    with personal tax planning or a business in need of strategic tax advice, we're here
                                    to help. From tax compliance and optimization to tax planning and strategy
                                    development, we offer expert guidance to ensure that you navigate the
                                    complexities of the tax landscape with confidence.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== License & Registration ==---> 
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-puzzle-piece"></i>
                                    </div>
                                    <h2 class="title">License & Registration</h2>
                                </div>
                                <p>
                                    Our comprehensive services cover a wide range of industries and regulatory
                                    requirements, ensuring compliance and peace of mind for your business. From
                                    obtaining necessary licenses and permits to registering your business with relevant
                                    authorities, we handle every step of the process with precision and efficiency. Our
                                    experienced team is dedicated to providing personalized solutions to your specific
                                    requirements, saving your time and effort while ensuring legal compliance. To
                                    navigate the complexities of license and registration procedures, allowing you to
                                    focus on growing your business confidently.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== Property Assessment & Registration ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-puzzle-piece"></i>
                                    </div>
                                    <h2 class="title">Property Assessment & Registration </h2>
                                </div>
                                <p>
                                    Our dedicated team specializes in assisting clients with accurate property
                                    assessments and seamless registration processes. Whether you're buying, selling, or
                                    transferring property, we ensure thorough assessments to determine fair market
                                    values and compliance with legal regulations. From gathering the necessary
                                    documentation to navigating registration procedures, we handle every step with
                                    precision and efficiency. Trust 360 Business & Services for reliable, transparent, and
                                    personalized property assessment and registration services that exceed your
                                    expectations. With us, your property transactions are in safe and capable hands.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---== Business Health Check Up ==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-puzzle-piece"></i>
                                    </div>
                                    <h2 class="title">Business Health Check Up</h2>
                                </div>
                                <p>
                                    We offer comprehensive business health check-up services to ensure your
                                    company's success and longevity. Our experienced team conducts thorough
                                    assessments of your business operations, finances, and strategies to identify
                                    strengths, weaknesses, and opportunities for improvement. Through detailed
                                    analysis and strategic recommendations, we help you optimize performance,
                                    mitigate risks, and achieve sustainable growth. Whether you're a startup or an
                                    established enterprise, our business health check-up services provide valuable
                                    insights and actionable insights to enhance your overall business health. To
                                    diagnose and prescribe solutions for a healthier, more resilient business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---==Accounting Outsourcing==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <h2 class="title">Accounting Outsourcing</h2>
                                </div>
                                <p>Accounting outsourcing involves hiring external firms to handle financial tasks, including bookkeeping, payroll, and tax preparation. It helps businesses reduce costs, improve efficiency, and access specialized expertise. Outsourcing allows companies to focus on core activities while ensuring accurate and compliant financial management.</p>
                            
                            </div>
                        </div>
                    </div>
                    <!---==Virtual CFO Services==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <h2 class="title">Virtual CFO Services</h2>
                                </div>
                                <p>
                                    Our financial experts offers personalized virtual CFO services to businesses of all
                                    sizes, delivering strategic financial guidance and support tailored to your specific
                                    needs. From financial planning and budgeting to performance analysis and risk
                                    management, we act as your virtual Chief Financial Officer, helping you make
                                    informed decisions to drive growth and profitability. With our flexible and costeffective solutions, you can access high-level financial expertise without the
                                    overhead of a full-time CFO.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---==Project Reports & Financing==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <h2 class="title">Project Reports & Financing</h2>
                                </div>
                                <p>
                                    Welcome to our comprehensive 360 Business Service, specializing in Project
                                    Reports & Financing solutions. Our expert team meticulously crafts detailed
                                    project reports, providing invaluable insights for informed decision-making and
                                    strategic planning. Whether you're launching a new venture or seeking expansion,
                                    our tailored financing services ensure access to the capital you need. From
                                    financial analysis to funding procurement, we offer end-to-end support to
                                    maximize your project's success. Trust us to navigate the complexities of project
                                    finance, delivering solutions that drive growth and prosperity for your business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---==RERA Registration==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">RERA Registration</h2>
                                </div>
                                <p>
                                    To navigate the complexities of Real Estate Regulatory Authority (RERA)
                                    compliance, ensuring seamless registration processes for developers, agents,
                                    and projects. With meticulous attention to detail, we guide you through every
                                    step, from document preparation to submission, guaranteeing adherence to
                                    regulatory requirements. Trust us to streamline your RERA registration, enabling
                                    you to focus on your core business activities while ensuring legal compliance and
                                    fostering trust among stakeholders. Join hands with us to unlock the full potential
                                    of your real estate endeavors with RERA Registration expertise.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---==Company Legal Service==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">Company Legal Service</h2>
                                </div>
                                <p>
                                    To navigate the complexities of Real Estate Regulatory Authority (RERA)
                                    compliance, ensuring seamless registration processes for developers, agents,
                                    and projects. With meticulous attention to detail, we guide you through every
                                    step, from document preparation to submission, guaranteeing adherence to
                                    regulatory requirements. Trust us to streamline your RERA registration, enabling
                                    you to focus on your core business activities while ensuring legal compliance and
                                    fostering trust among stakeholders. Join hands with us to unlock the full potential
                                    of your real estate endeavors with RERA Registration expertise.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!---==E-cashbook==--->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <h2 class="title">Accounting Software</h2>
                                </div>
                                <p>
                                    Introducing E-Cashbook, the next-generation accounting software designed to
                                    revolutionize your financial management experience. With E-Cashbook,
                                    streamline your accounting processes with unparalleled efficiency and precision.
                                    This innovative software offers intuitive features tailored to meet the diverse
                                    needs of modern businesses. From seamless bookkeeping to robust reporting
                                    capabilities, E-Cashbook empowers you to stay in control of your finances
                                    effortlessly. Say goodbye to complexity and hello to simplicity with E-Cashbook,
                                    your ultimate solution for modern accounting. Experience the future of financial
                                    management today with E-Cashbook, the game-changer in accounting
                                    software.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- features-area-end -->

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
