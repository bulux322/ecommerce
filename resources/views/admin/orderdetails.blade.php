@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Rincian Pesanan</p>
                        <p class="card-description">
                            <a href="{{route('admin.orders')}}" class="btn btn-outline-primary me-2">Kembali</a>
                        </p>

                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>Gambar Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
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
                                        <th>Pajak</th>
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
                        <!-- Form for updating order status -->
                        <form action="{{ route('admin.updateOrderStatus', ['order_id' => $order->id]) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="new_status" class="form-label">Ubah Status Pesanan</label>
                                <select name="new_status" class="form-control">
                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="terverifikasi" {{ $order->status === 'terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
                                    <option value="dibatalkan" {{ $order->status === 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Perbarui Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Alamat Pengiriman</h4>
                        <div class="product-detail row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Nama Depan</th>
                                            <td>{{$order->firstname}}</td>
                                            <th>Nama Belakang</th>
                                            <td>{{$order->lastname}}</td>
                                        </tr>
                                        <tr>
                                            <th>Telepon</th>
                                            <td>{{$order->phone}}</td>
                                            <th>Email</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Lengkap</th>
                                            <td>{{$order->address}}</td>
                                            <th>Zipcode</th>
                                            <td>{{$order->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <th>Negara</th>
                                            <td>{{$order->country}}</td>
                                            <th>City</th>
                                            <td>{{$order->city}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tipe Mobil</th>
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
