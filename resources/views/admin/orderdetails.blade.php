@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Order Details</p>
                        <p class="card-description">
                            <a href="{{route('admin.orders')}}" class="btn btn-outline-primary me-2">Back To Order</a>
                        </p>
                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
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
                                        <td><img src="{{ asset('assets/images/'.$item->product->image) }}" alt="{{ $item->product->name }}" class="img-fluid" width="160px"></td>
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
                        <div class="product-detail row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>First Name</th>
                                            <td>{{$order->firstname}}</td>
                                            <th>Last Name</th>
                                            <td>{{$order->lastname}}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>{{$order->phone}}</td>
                                            <th>Email</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{$order->address}}</td>
                                            <th>Zipcode</th>
                                            <td>{{$order->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <th>Country</th>
                                            <td>{{$order->country}}</td>
                                            <th>City</th>
                                            <td>{{$order->city}}</td>
                                        </tr>
                                        <tr>
                                            <th>Cartype</th>
                                            <td>{{$order->cartype}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
