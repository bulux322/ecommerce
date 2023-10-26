@extends('layouts.base')
@push('styles')

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
<section class="cart-section section-b-space">
<div class="container pb-60">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Thank you for your order</h2>
            <p>A confirmation email was sent.</p>
            <a href="{{route('shop.index')}}" class="btn btn-submit btn-submitx">Continue Shopping</a>
        </div>
    </div>
</div><!--end container-->
</section>
@endsection
@push('scripts')

@endpush
