@extends('layouts.baseadmin')

@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Blog Post</h4>
                        <p class="card-description">
                            <a href="{{ route('admin.blogposts.index') }}" class="btn btn-primary me-2">Lihat Semua Blog Post</a>
                        </p>
                        <div class="table-responsive">
                            <form method="POST" action="{{ route('admin.blogposts.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukkan judul blog post">
                                    @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="content" class="form-label">Konten</label>
                                    <textarea name="content" class="form-control" rows="4" id="editor" placeholder="Masukkan konten blog post"></textarea>
                                    @error('content')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Masukkan slug blog post">
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="blogcategory_id" class="form-label">Kategori</label>
                                    <select name="blogcategory_id" class="form-select">
                                        @foreach ($categories as $BlogCategory)
                                        <option value="{{ $BlogCategory->id }}">{{ $BlogCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('blogcategory_id')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="{{ route('admin.blogposts.index') }}" class="btn btn-secondary">Batal</a>
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
