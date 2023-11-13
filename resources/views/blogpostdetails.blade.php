@extends('layouts.base')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">
    <style>
        .product-box .product-details h5
        {
            width: 100%;
        }
    </style>
@endpush
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Post Detail</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Details Blog Section Start -->
<section class="masonary-blog-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-9 col-md-8 order-md-1 ratio_square">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="blog-details">
                            <div class="blog-image-box">
                                <img src="{{ asset('assets/images/blog/' . $post->image) }}" alt="" class="card-img-top">
                            </div>

                            <div class="blog-title">
                                <div class="social-media media-center">
                                    <a href="https://www.facebook.com/" target="new">
                                        <div class="social-icon-box social-color">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                    </a>
                                    <a href="https://twitter.com/" target="new">
                                        <div class="social-icon-box social-color">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                    </a>
                                    <a href="https://in.pinterest.com/" target="new">
                                        <div class="social-icon-box social-color">
                                            <i class="fab fa-pinterest-p"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-detail-contain">
                            <span class="font-light">{{ $post->created_at->format('d M Y') }}</span>
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="font-light firt-latter">{!! $post->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4">
                <div class="left-side">
                    <!-- Search Bar Start -->
                    <div class="search-section">
                        <div class="input-group search-bar">
                            <input type="search" class="form-control search-input" placeholder="Search">
                            <button class="input-group-text search-button" id="basic-addon3">
                                <i class="fas fa-search text-color"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Search Bar End -->

                    <!-- Popular Post Start -->
                    <div class="popular-post mt-4">
                        <div class="popular-title">
                            <h3>Popular Posts</h3>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">01</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">02</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">03</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">04</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Post End -->

                    <!-- Category section Start -->
                    <div class="category-section popular-post mt-4">
                        <div class="popular-title">
                            <h3>Category</h3>
                        </div>
                        <ul>
                            <li class="category-box">
                                <a href="blog-left-sidebar.html">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-globe text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Global</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-box">
                                <a href="blog-left-sidebar.html">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-building text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Business</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="blog-left-sidebar.html">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-play text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Entertainmant</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="blog-left-sidebar.html">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-tshirt text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Sports</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="blog-left-sidebar.html">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-dumbbell text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Health</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Category section End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Details Blog Section End -->

@endsection
