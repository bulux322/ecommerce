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
              <h4 class="card-title">Tambah Produk</h4>
              <div class="table-responsive">
                <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter product name">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter product slug">
                        @error('slug')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <input type="text" name="short_description" class="form-control" placeholder="Enter product short_description">
                        @error('short_description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Enter product description"></textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="regular_price" class="form-label">Regular Price</label>
                        <input type="text" name="regular_price" class="form-control" placeholder="Enter regular price">
                        @error('regular_price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sale_price" class="form-label">Sale Price</label>
                        <input type="text" name="sale_price" class="form-control" placeholder="Enter sale price">
                        @error('sale_price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" name="sku" class="form-control" placeholder="Enter SKU">
                        @error('sku')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="stock_status" class="form-label">Stock Status</label>
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
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control" placeholder="Enter quantity"/>
                        @error('quantity')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control"/>
                        @error('image')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.product') }}" class="btn btn-secondary">Batal</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@push('script')
<script>
    tinymce.init({
      selector: '#description',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
  </script>
@endpush
