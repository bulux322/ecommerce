@extends('layouts.base')
@section('content')

{{-- <section class="pt-0 poster-section">
    <div class="poster-image slider-for custome-arrow classic-arrow">
        <div>
            <img src="assets/images/furniture-images/poster/1.png" class="img-fluid blur-up lazyload" alt="">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/2.png" class="img-fluid blur-up lazyload" alt="">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/3.png" class="img-fluid blur-up lazyload" alt="">
        </div>
    </div>
    <div class="slider-nav image-show">
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>

        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-contain">
        <div class="banner-left">
            <h4>Sale <span class="theme-color">35% Off</span></h4>
            <h1>New Latest <span>Dresses</span></h1>
            <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
            <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
            <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</p>
        </div>
    </div>

    <div class="right-side-contain">
        <div class="social-image">
            <h6>Facebook</h6>
        </div>

        <div class="social-image">
            <h6>Instagram</h6>
        </div>

        <div class="social-image">
            <h6>Twitter</h6>
        </div>
    </div>
</section> --}}

<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h5 class="theme-color">Produk Kami</h5>
                </div>
            </div>
        </div>
        <style>
            .r-price {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .r-price .main-price {
                width: 100%;
            }

            .r-price .rating {
                padding-left: auto;
            }

            .product-style-3.product-style-chair .product-title {
                text-align: left;
                width: 100%;
            }

            @media (max-width:600px) {

                .product-box p,
                .product-box a {
                    text-align: left;
                }

                .product-style-3.product-style-chair .main-price {
                    text-align: right !important;
                }
            }
            .rating {
                display: flex;
                margin-bottom: -4px;
            }
        </style>
        <div class="row g-sm-4 g-3">
            @foreach ($products as $product)
            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="{{route('shop.product.details',['slug'=>$product->slug])}}">
                            <img src="{{ asset('assets/images')}}/{{$product->image}}"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color"><h3>Rp.{{ number_format($product->regular_price, 0, ',', '.') }}</h3></div>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">{{$product->category->name}}</p>
                            <a href="{{route('shop.product.details',['slug'=>$product->slug])}}" class="font-default">
                                <h5>{{$product->name}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
