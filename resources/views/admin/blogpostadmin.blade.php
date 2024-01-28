@extends('layouts.baseadmin')

@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Semua Blog Konten</h4>
                        <p class="card-description">
                            <a href="{{ route('admin.blogposts.create') }}" class="btn btn-outline-primary me-2">Tambah Blog Konten</a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Slug</th>
                                        <th>Kategori</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogPosts as $blogPost)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blogPost->title }}</td>
                                        <td>{{ $blogPost->slug }}</td>
                                        <td>{{ $blogPost->category->name }}</td>
                                        <td>{{ $blogPost->image }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogposts.edit', $blogPost->id) }}" class="btn btn-outline-primary">Ubah</a>
                                            <form action="{{ route('admin.blogposts.destroy', $blogPost->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
