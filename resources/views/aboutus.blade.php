@extends('layouts.base')
@push('styles')
    <style>
        .f-logo {
            max-width: 70px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
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
                <h3>About Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-5 offset-xl-1">
                <div class="row g-3">
                    <div class="col-md-6">
                        <img src="assets/images/inner-page/review-image/6.png"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/inner-page/review-image/7.png"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    <div class="col-12 ratio_40">
                        <div>
                            <img src="assets/images/inner-page/review-image/8.jpg"
                                class="img-fluid rounded-3 team-image bg-img" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="about-details">
                    <div>
                        <h2>Rockrack Overland</h2>
                        <h3>UMKM yang sedang berkembang</h3>
                        <p>Rockrack Overland adalah usaha mikro kecil masyarakat yang bergerak di bidang usaha otomotif berdiri pada tahun 2015,
                            awalnya rockrack overland hanya memproduksi roofrack saja lalu berkembang dengan memproduksi Rooftent,
                            awning, bumper aksesoris dan jasa sewa camper van.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .products-c .bg-size {
        background-position: center 0 !important;
    }
</style>

<section class="ratio_asos overflow-hidden pb-5">
    <div class="px-0 container-fluid p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Katalog Produk dan Harga!</h2>
                </div>
            </div>

            <div class="our-product products-c">
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing">
                                <img src="assets/images/fashion/product/front/25.png"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">

                                </div>
                                <p class="font-light mb-sm-2 mb-0">Side Awning Universal</p>
                                <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing" class="font-default">
                                    <h5>Katalog Side Awning Universal</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing">
                                <img src="assets/images/fashion/product/front/26.png"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">

                                </div>
                                <p class="font-light mb-sm-2 mb-0">Rooftop Tent Universal</p>
                                <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing" class="font-default">
                                    <h5>Katalog Rooftop Tent Universal</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing">
                                <img src="assets/images/fashion/product/front/27.png"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">

                                </div>
                                <p class="font-light mb-sm-2 mb-0">Rooftop Tent Wing Flysheet Universal</p>
                                <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing" class="font-default">
                                    <h5>Katalog Rooftop Tent Wing Flysheet Universal</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing">
                                <img src="assets/images/fashion/product/front/28.png"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">

                                </div>
                                <p class="font-light mb-sm-2 mb-0">Rooftop Tent Hardcase Universal</p>
                                <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing" class="font-default">
                                    <h5>Rooftop Tent Hardcase Universal</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing">
                                <img src="assets/images/fashion/product/front/29.png"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">

                                </div>
                                <p class="font-light mb-sm-2 mb-0">Roofrack Custom</p>
                                <a href="https://drive.google.com/drive/folders/1RTW_VLPrctHAR82c1Fc14BKYllHMW6uv?usp=sharing" class="font-default">
                                    <h5>Katalog Roofrack Custom</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
