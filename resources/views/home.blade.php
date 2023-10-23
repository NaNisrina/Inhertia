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

                            <form>
                                <div class="form-row ">

                                    <div class="form-group col-lg-9">
                                        <input type="text" class="form-control" name="search" id="search"
                                            placeholder="Search..." aria-label="search">

                                        {{-- <input type="text" class="form-control" id="inputPatientName"
                                            placeholder="Keywords"> --}}
                                    </div>

                                    {{-- <div class="form-group col-lg-3">
                                        <select name="" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">All Locations</option>
                                            <option value="Normal distribution ">Location 2 </option>
                                            <option value="Normal distribution ">Location 3 </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <select name="" class="form-control wide" id="inputDepartmentName">
                                            <option value="Normal distribution ">SEO Expert </option>
                                            <option value="Normal distribution ">Web Designer </option>
                                            <option value="Normal distribution ">Web Developer</option>
                                            <option value="Normal distribution ">Graphic Deesigner</option>
                                            <option value="Normal distribution ">Content Writer</option>
                                        </select>
                                    </div> --}}

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

                    {{-- <ul class="job_check_list">
                        <li class=" ">
                            <input id="checkbox_qu_01" type="checkbox" class="styled-checkbox">
                            <label for="checkbox_qu_01">
                                Freelancer
                            </label>
                        </li>
                        <li class=" ">
                            <input id="checkbox_qu_02" type="checkbox" class="styled-checkbox">
                            <label for="checkbox_qu_02">
                                Part Time
                            </label>
                        </li>
                        <li class=" ">
                            <input id="checkbox_qu_03" type="checkbox" class="styled-checkbox">
                            <label for="checkbox_qu_03">
                                Full Time
                            </label>
                        </li>
                    </ul> --}}

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

                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Web Design
                            </h5>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Web Development
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Graphic Design
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Seo marketing
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c5.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Accounting
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="#" class="box">
                        <div class="img-box">
                            <img src="images/c6.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Content Writing
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end category section -->

    <!-- Carousel -->
    <div class="bg-dark py-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <img src="/images/j1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-6">
                                <img src="/images/j2.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <img src="/images/j2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-6">
                                <img src="/images/j3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <img src="/images/j3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-6">
                                <img src="/images/j4.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
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
