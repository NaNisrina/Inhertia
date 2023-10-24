@extends('admin.template')
@section('title', 'Category')
@section('content-title', 'Category')
@section('content')
  <form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-5">
        <div class="form-group">
          <input type="text" name="name" placeholder="Category Name" id="" class="form-control">
        </div>
      </div>
      <div class="col-5">
        <div class="form-group">
          <input type="text" name="icon" placeholder="Category Icon" id="" class="form-control">
        </div>
      </div>
      <div class="col-2">
        <button class="btn btn-success d-block">Add</button>
      </div>
    </div>
  </form>
  <table class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Nama</th>
      <th>Slug</th>
      <th>Icon</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->slug }}</td>
          <td>{{ $category->icon }}</td>
          <td  class="d-flex">
            <form action="{{ route('category.destroy', $category->id) }}" onsubmit="confirm('Yakin Ingin Menghapus Data Ini?')" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
