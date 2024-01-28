@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Kategori</h4>
              <div class="table-responsive">
                <form method="POST" action="{{ route('admin.categories.update', ['id' => $category->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $category->slug }}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Perbarui Kategori</button>
                    <a href="{{ route('admin.categories') }}" class="btn btn-outline-secondary">Batal</a>
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

@endpush
