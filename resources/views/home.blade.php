@extends('template')
@section('title', 'Home')

@section('content')

  <!-- slider section -->
  <section class="slider_section">
    <div class="container ">
      <div class="row">
        <div class="col-lg-7 col-md-8 mx-auto">
          <div class="detail-box">
            <h1>
              INHERTIA <br>
              FRANCHISE
            </h1>
            <p>
              Look for a franchise you love the most
            </p>
          </div>
        </div>
      </div>
      <div class="find_container ">
        <div class="container">
          <div class="row">
            <div class="col">

              <form action="{{ route('franchise') }}">
                <div class="form-row ">

                  <div class="form-group col-lg-9">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search..."
                      aria-label="search">
                  </div>
                  <div class="form-group col-lg-3">
                    <div class="btn-box">
                      <button type="submit" class="btn ">
                        <i class="fa fa-search mr-2" aria-hidden="true"></i>
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->
  </div>

  <!-- category section -->
  <section class="category_section category_body">
    <div class="container">

      <h3 class="text-white pt-3">CATEGORY</h3>

      <div class="row">
        @foreach ($categories as $category)
          <div class="col-sm-6 col-md-4 col-xl-2 py-0 px-0">
            <a href="{{ route('franchise', ['category' => $category->slug]) }}" class="box">
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

  <!-- Carousel -->
  <div class="bg-dark py-5">
    <div class="container">
      <h3 class="text-white pt-3">BEST FRANCHISE</h3>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($datas as $data)
            @if (count($data) == 2)
              <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                <div class="row">
                  @if (isset($data[1]))
                    <div class="col-6">
                      <img src="{{ $data[0]['image'] }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-6">
                      <img src="{{ $data[1]['image'] }}" class="d-block w-100" alt="...">
                    </div>
                  @endif
                </div>
              </div>
            @endif
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
      </div>
    </div>
  </div>
  <!-- /Carousel -->

@endsection
