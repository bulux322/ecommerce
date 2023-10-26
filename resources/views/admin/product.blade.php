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
                <a href="{{route('admin.product.add')}}" class="btn btn-outline-primary me-2">Tambah Produk</a>
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
                                <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
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
</div>
@endsection
