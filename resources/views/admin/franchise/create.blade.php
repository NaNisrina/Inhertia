@extends('admin.template')
@section('title', 'Franchise | Create')
@section('content-title', 'Franchise | Create')
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('franchise.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Franchise</label>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nama Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Link Franchise</label>
                            <input id="link" type="text" class="form-control" name="link" placeholder="Link Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Category</label>
                            <select class="form-control" name="category">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Nama Perusahaan Franchise</label>
                            <input id="link" type="text" class="form-control" name="name_perusahaan" placeholder="Nama Perusahaan Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Alamat Franchise</label>
                            <input id="link" type="text" class="form-control" name="alamat" placeholder="Alamat Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Telepon Franchise</label>
                            <input id="link" type="text" class="form-control" name="telepon" placeholder="No Telepon Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Email Franchise</label>
                            <input id="link" type="email" class="form-control" name="email" placeholder="Email Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="link" class="form-label">Modal Minimal</label>
                            <input id="link" type="number" class="form-control" name="modal_minimal" placeholder="Modal Minimal" >
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Photo Franchise</label>
                            <input id="photo" type="file" class="form-control" name="file" placeholder="Nama Franchise" >
                        </div>
                        <div class="form-group">
                            <label for="summernote_desc" class="form-label">Deskrpsi Franchise</label>
                            <textarea class="form-control" name="description" id="summernote_desc"></textarea>
                        </div>
                        <button class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-section')
    <script>
        $('#summernote_desc').summernote();
    </script>
@endsection