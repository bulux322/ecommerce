@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Produk</h4>
              <p class="card-description">
                <a href="{{route('admin.product.add')}}" class="btn btn-primary me-2">Tambah Produk</a>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>SKU</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($products->currentPage() - 1) * $products->perPage();
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                <img src="{{ asset('assets/images')}}/{{$product->image}}" alt="{{$product->name}}" width="100">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->stock_status }}</td>
                            <td>Rp.{{ $product->regular_price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->SKU }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
    </div>
    </footer>
    <!-- partial -->
  </div>
@endsection
