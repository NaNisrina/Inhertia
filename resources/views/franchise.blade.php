@extends('template')
@section('title', 'Franchise')

@section('content')
        <!-- job section -->
        <section class="job_section layout_padding category_body">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        RECENT & FEATURED JOBS
                    </h2>
                </div>
                @foreach ($categories as $category)
                <div class="job_container">
                    <h4 class="job_heading">
                        {{$category->name}}
                    </h4>
                    <div class="row">
                        @foreach ($category->franchise as $franchise)
                        <div class="col-lg-6">
                            <div class="box bg-light text-primary shadow">
                                <div class="job_content-box">
                                    <div class="img-box">
                                        <img src="{{ $franchise->image }}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            {{ $franchise->name }}
                                        </h5>
                                        <div class="detail-info">
                                            <h6>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>
                                                    Washington. D.C.
                                                </span>
                                            </h6>
                                            <h6>
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                <span>
                                                    $1200 - $1300
                                                </span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-box">
                                    {{-- <button class="fav-btn">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button> --}}
                                    <a href="" class="btn btn-outline-primary">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- end job section -->
@endsection
