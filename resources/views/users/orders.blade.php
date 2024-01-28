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
                <h3>Pesanan</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="cart-section section-b-space">
    <div class="container">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <p class="card-title">Pesanan Saya</p>
                          <p class="card-description">
                            <a href="{{route('user.index')}}" class="btn btn-primary me-2">Kembali</a>
                            </p>
                          <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
                              <thead>
                                <tr>
                                    <th>Pesanan-Id</th>
                                    <th>Sub Total</th>
                                    <th>Pajak</th>
                                    <th>Total</th>
                                    <th>Nama Depan</th>
                                    <th>Nama Belakang</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Kode Pos</th>
                                    <th>Tipe Mobil</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                    $i = ($orders->currentPage() - 1) * $orders->perPage();
                                @endphp
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>Rp.{{$order->subtotal}}</td>
                                    <td>Rp.{{$order->tax}}</td>
                                    <td>Rp.{{$order->total}}</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->zipcode}}</td>
                                    <td>{{$order->cartype}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->status}}</td>
                                    <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-primary">Rincian</a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            {{$orders->links()}}
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
@endsection
@push('scripts')

@endpush
