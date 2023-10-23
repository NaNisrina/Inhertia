@extends('admin.template')
@section('title', 'Franchise')
@section('content-title', 'Franchise')
@section('content')
  <a href="{{ route('franchise.create') }}" class="btn btn-success mb-3">Add</a>
  <table class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Nama</th>
      <th>Image</th>
      <th>Kategori</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach ($franchises as $franchise)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $franchise->name }}</td>
          <td style="max-width: 100px ;">
            <img class="w-100" src="{{ asset($franchise->image) }}" alt="">
          </td>
          <td>{{ $franchise->category->name }}</td>
          <td>
            <div class="d-flex">
              <a href="{{ route('franchise.edit', $franchise->id) }}" class="btn btn-warning mr-3">Edit</a>
              <form action="{{ route('franchise.destroy', $franchise->id) }}" onsubmit="confirm('Anda Ingin Menghapus Data Ini?')" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
