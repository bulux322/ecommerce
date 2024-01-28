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
                <h3>OrderDetail</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">OrderDetail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="user-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Details</h4>
                        <p class="card-description">
                            <a href="{{route('user.index')}}" class="btn btn-primary me-2">Back To Profile</a>
                            <a href="https://wa.me/08122300655" class="btn btn-primary me-2">Unggah Bukti Transaksi</a>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Gambar</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td><img src="{{ asset('assets/images/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="img-fluid" width="120px"></td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>Rp.{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}x</td>
                                        <td>Rp.{{ $item->price * $item->quantity }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>Rp.{{ $order->subtotal }}</td>
                                        <td>Rp.{{ $order->tax }}</td>
                                        <td>Rp.{{ $order->total }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Billing Address</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>First Name :</th>
                                    <td>{{$order->firstname}}</td>
                                    <th>Last Name :</th>
                                    <td>{{$order->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Phone :</th>
                                    <td>{{$order->phone}}</td>
                                    <th>Email :</th>
                                    <td>{{$order->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Address :</th>
                                    <td>{{$order->address}}</td>
                                    <th>Zipcode :</th>
                                    <td>{{$order->zipcode}}</td>
                                </tr>
                                <tr>
                                    <th>Country :</th>
                                    <td>{{$order->country}}</td>
                                    <th>City :</th>
                                    <td>{{$order->city}}</td>
                                </tr>
                                <tr>
                                    <th>Cartype :</th>
                                    <td>{{$order->cartype}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')

@endpush
