@extends('template')
@section('title', 'Franchise')

@section('content')
    <!-- job section -->
    <section class="job_section layout_padding bg-dark">
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="card shadow">
                        <div class="card-body text-dark">
                            <h3 class="text-center">{{ $franchise->name }}</h3>
                            <hr class="text-dark">
                            <img src="{{ asset($franchise->image) }}" class="d-block mx-auto mb-4 w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="m-0">Nama Perusahaan</h6>
                                    <p><span class="text-muted">{{ $franchise->name_perusahaan }}</span></p>

                                    <h6 class="m-0">Alamat</h6>
                                    <p><span class="text-muted">{{ $franchise->alamat }}</span></p>

                                    <h6 class="m-0">Email</h6>
                                    <p><span class="text-muted">{{ $franchise->email }}</span></p>

                                    <h6 class="m-0">Telepon</h6>
                                    <p><span class="text-muted">{{ $franchise->telepon }}</span></p>

                                    <h6 class="m-0">Modal Minimal</h6>
                                    <p><span class="text-muted">Rp.{{ number_format($franchise->modal_minimal) }}</span></p>
                                </div>
                            </div>
                            <a href="{{ route('franchise') }}" class="btn btn-danger mb-3">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card shadow">
                        <div class="card-body text-dark">
                            {!! $franchise->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end job section -->
@endsection
