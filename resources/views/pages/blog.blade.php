@extends('layouts.app')

@section('title', 'Blog - 360 Business & Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/blog'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Blogs</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

        <!-- blog-area -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="inner-blog-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="blog-post-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img01.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Development</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/blog_avatar01.png') }}" alt="">Kat Doven</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img02.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Business</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/blog_avatar02.png') }}" alt="">Floyd Miles</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img03.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Tax Advisory</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/blog_avatar03.png') }}" alt="">Bessie Cooper</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img04.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Business</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/blog_avatar04.png') }}" alt="">Devon Lane</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img05.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Consultancy</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blog') }}"><img src="{{ asset('assets/img/blog/blog_avatar05.png') }}" alt="">Annette Black</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/h3_blog_img06.jpg') }}" alt=""></a>
                                                <a href="{{ route('blog') }}" class="tag tag-two">Finance</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="{{ route('blogdetails') }}">Meet AutoManage, the best AI management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="{{ route('blogdetails') }}"><img src="{{ asset('assets/img/blog/blog_avatar06.png') }}" alt="">Eleanor Pena</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
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
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
