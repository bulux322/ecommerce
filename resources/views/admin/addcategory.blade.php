@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            {{-- <div class="card-header">
                <div class="row">
                    <div class="col-md-6">All Category</div>
                    <div class="col-md-6"></div>
                </div>
            </div> --}}
            <div class="card-body">
              <h4 class="card-title">All Category</h4>
              <p class="card-description">
                <a href="{{route('admin.categories')}}" class="btn btn-primary me-2">See Category</a>
              </p>
              <div class="table-responsive">
                <form method="POST" action="{{ route('admin.categories.storeCategory') }}">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter category name">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter category slug">
                        @error('slug')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.categories') }}" class="btn btn-secondary">Batal</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection
@push('script')

@endpush
