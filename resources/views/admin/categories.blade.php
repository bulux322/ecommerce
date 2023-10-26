@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Category</h4>
              <p class="card-description">
                <a href="{{route('admin.category.add')}}" class="btn btn-outline-primary me-2">Tambah Category</a>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Action</th>
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
                            <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-outline-primary">Edit</a>
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
