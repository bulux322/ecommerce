@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Kategori</h4>
              <p class="card-description">
                <a href="{{route('admin.category.add')}}" class="btn btn-outline-primary me-2">Tambah Kategori</a>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Slug</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i = ($categories->currentPage()-1)*$categories->perPage();
                    @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-outline-primary">Ubah</a>
                            <form action="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$categories->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
