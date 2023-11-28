@extends('template')
@section('title', 'Home')

@section('content')

    <!-- slider section -->
    <section class="text-white my-5">
        <div class="container">

            <div class="detail-box px-3 py-3">

                <div class="row">

                    <div class="col-6 text-left align-middle">
                        <h1 class="mt-5 font-weight-bold text-monospace">
                            INHERTIA, <br>
                        </h1>
                        <h3 class="font-weight-normal">
                            A PLACE TO START <br>
                            YOUR OWN FRANCHISE
                        </h3>
                        <p>
                            Look for a franchise you love the most
                        </p>
                    </div>

                    <div class="col-6 text-right">
                        <img src="images/Eduxia Logo.png" alt="" class="w-50">
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- end slider section -->
    </div>

    <!-- category section -->
    <section class="category_section mb-3">
        <div class="container">

            <h3 class="text-white">CATEGORY</h3>

            <div class="container row">
                @foreach ($categories as $category)
                    <div class="col-sm-6 col-md-4 col-xl-2 py-0 px-0">
                        <a href="{{ route('franchise', ['category' => $category->slug]) }}"
                            class="box mb-2 mr-2 border-danger rounded">
                            <div class="icon h1 pt-3">
                                <i class="{{ $category->icon }} fa-lg"></i>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end category section -->

    {{-- <!-- Carousel -->
    <div class="bg-dark py-5">
        <div class="container">

            {{-- <h3 class="text-white pt-3">BEST FRANCHISE lah</h3> --}}

            {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    @foreach ($datas as $data)
                            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} text-center">
                                <div class="row">
                                    @if (isset($data[1]))
                                        <div class="col-6" style="max-height: 666px;">
                                            <img src="{{ $data[0]['image'] }}" class="img_carousel" alt="...">
                                        </div>
                                        <div class="col-6" style="max-height: 666px;">
                                            <img src="{{ $data[1]['image'] }}" class="img_carousel" alt="...">
                                        </div>
                                    @endif
                                </div>
                            </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> --}}

        </div>
    </div>
    <!-- /Carousel --> --}}

@endsection
