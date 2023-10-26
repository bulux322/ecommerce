@extends('layouts.base')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css2/color-01.css') }}">
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
                <h3>Checkout</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="checkout-section section-b-space">
    <div class="container">
        <div class=" main-content-area">
            <form action="{{ route('checkout.placeorder') }}" method="POST" name="frm-billing">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Billing Address</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="firstname">first name<span>*</span></label>
                                    <input type="text" name="firstname" placeholder="Your name">
                                    @error('firstname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lastname">last name<span>*</span></label>
                                    <input type="text" name="lastname" placeholder="Your last name">
                                    @error('lastname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email Addreess:</label>
                                    <input type="email" name="email" placeholder="Type your email">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Phone number<span>*</span></label>
                                    <input type="number" name="phone" placeholder="10 digits format">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" placeholder="Street at apartment number">
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="country">Country<span>*</span></label>
                                    <input type="text" name="country" placeholder="Country">
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="zipcode">Postcode / ZIP:</label>
                                    <input type="number" name="zipcode" placeholder="Your postal code">
                                    @error('zipcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="city">Town / City<span>*</span></label>
                                    <input type="text" name="city" placeholder="City name">
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="cartype">Car Type<span>*</span></label>
                                    <input type="text" name="cartype" placeholder="City name">
                                    @error('cartype')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="summary-item payment-method">
                            <h4 class="title-box">Payment Method</h4>
                            <div class="choose-payment-methods">
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-bank" value="cod" type="radio">
                                    <span>Cash On Delivery</span>
                                    <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                                    <span>visa</span>
                                    <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                    <span>Paypal</span>
                                    <span class="payment-desc">You can pay with your credit</span>
                                    <span class="payment-desc">card if you don't have a paypal account</span>
                                </label>
                            </div>
                            <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">Rp.{{Cart::instance('cart')->total()}}</span></p>
                            <button type="submit" class="btn btn-medium">Place order now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div><!--end main content area-->
    </div><!--end container-->
</section>

@endsection
@push('scripts')
    <script src="{{ asset('assets/js2/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js2/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js2/functions.js') }}"></script>
@endpush
