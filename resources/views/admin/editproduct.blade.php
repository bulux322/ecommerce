@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
              <h4 class="card-title">Ubah Produk</h4>
              <div class="table-responsive">
                <form method="POST" action="{{ route('admin.product.update', ['id' => $product->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
                        @error('slug')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="short_description" class="form-label">Deskripsi Singkat</label>
                        <input type="text" name="short_description" class="form-control" value="{{ $product->short_description }}">
                        @error('short_description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="regular_price" class="form-label">Harga</label>
                        <input type="text" name="regular_price" class="form-control" value="{{ $product->regular_price }}">
                        @error('regular_price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sale_price" class="form-label">Potongan Harga</label>
                        <input type="text" name="sale_price" class="form-control" value="{{ $product->sale_price }}">
                        @error('sale_price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" name="sku" class="form-control" value="{{ $product->SKU }}">
                        @error('sku')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="stock_status" class="form-label">Status Stok</label>
                        <select class="form-control" name="stock_status">
                            <option value="instock">In Stock</option>
                            <option value="outofstock">Out of Stock</option>
                        </select>
                        @error('stock_status')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="featured" class="form-label">Featured</label>
                        <select class="form-control" name="featured">
                            <option value="0">Yes</option>
                            <option value="1">No</option>
                        </select>
                        @error('featured')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="quantity" class="form-label">Jumlah</label>
                        <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}"/>
                        @error('quantity')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <!-- Tambahkan input tersembunyi untuk menyimpan path gambar saat ini -->
                    <input type="hidden" name="current_image" value="{{ $product->image }}">
                    <!-- Tampilkan gambar saat ini -->
                    <div class="mb-3 mt-3">
                        <label for="current_image" class="form-label"></label>
                        <img src="{{ asset('assets/images') }}/{{ $product->image }}" class="img-fluid" width="120px">
                    </div>
                    <!-- ... (lanjutkan dengan input lainnya) -->
                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control"/>
                        @error('image')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-control" name="category_id">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    @if($category->id == $product->category_id)
                                    selected
                                    @endif>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Perbarui Kategori</button>
                    <a href="{{ route('admin.product') }}" class="btn btn-outline-secondary">Batal</a>
                </form>
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
@push('script')

@endpush
