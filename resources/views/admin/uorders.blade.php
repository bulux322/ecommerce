@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Kumpulan Pesanan</p>
                  <p class="card-description">
                    <a href="{{route('admin.mcheckout.create')}}" class="btn btn-outline-primary me-2">Tambah Pesanan</a>
                    <a href="{{route('admin.exportOrders')}}" class="btn btn-outline-primary me-2">Ekspor Pesanan</a>
                  </p>
                  <div class="table-responsive">
                    <div class="datatable-search">
                        <input type="text" id="datatable-input" placeholder="Search..." title="Search within table">
                    </div>
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
                            <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-outline-primary">Rincian</a></td>
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
@endsection
@push('script')

@endpush
