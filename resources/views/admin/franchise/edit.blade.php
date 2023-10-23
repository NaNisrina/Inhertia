@extends('admin.template')
@section('title', 'Franchise | Edit')
@section('content-title', 'Franchise | Edit')
@section('content')
<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('franchise.update', $franchise->id) }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Franchise</label>
                        <input id="name" value="{{ $franchise->name }}" type="text" class="form-control" name="name" placeholder="Nama Franchise" >
                    </div>
                    <div class="form-group">
                        <label for="link" class="form-label">Link Franchise</label>
                        <input id="link" value="{{ $franchise->link }}" type="text" class="form-control" name="link" placeholder="Link Franchise" >
                    </div>
                    <div class="form-group">
                        <label for="link" class="form-label">Category</label>
                        <select  class="form-control" name="category">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                @if ($category->id == $franchise->category_id)
                                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>                                
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>                                
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Photo Franchise</label>
                        <input id="photo" type="file" class="form-control" name="file" placeholder="Nama Franchise" >
                    </div>
                    <div class="form-group">
                        <label for="summernote_desc" class="form-label">Deskrpsi Franchise</label>
                        <textarea class="form-control" name="description" id="summernote_desc">
                            {{ $franchise->description }}
                        </textarea>
                    </div>
                    <button class="btn btn-success">Update</button>
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