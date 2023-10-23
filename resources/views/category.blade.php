@extends('template')
@section('title', 'Category')

@section('content')

<div class="container">
    <div class="heading_container heading_center text-danger">
        <h2 class="my-3">
            PILIH KATEGORI
        </h2>
    </div>
</div>

<div class="container text-center py-5">
    <div class="row justify-content-center">

        @foreach ($categories as $category)

        <div class="col-3 mt-4 mr-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon h1 pt-3">
                    <i class="fa-solid fa-list fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        {{ $category->name }}
                    </h5>
                </div>
            </a>
        </div>
        @endforeach

        {{-- <div class="col-3 mt-4 mr-3 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-plug fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        ELEKTRONIK
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-broom fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        RUMAH TANGGA
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-bowl-food fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        MAKANAN
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-mug-hot fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        MINUMAN
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-shirt fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        PAKAIAN
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-store fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        MINIMARKET
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-scissors fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        SALON
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-dumbbell fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        GYM
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-jug-detergent fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        LAUNDRY
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 mr-3 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-keyboard fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        AKSESORIS GADGET
                    </h5>
                </div>
            </a>
        </div>
        <div class="col-3 mt-4 ml-3 bg-warning border rounded">
            <a href="#" class="box">
                <div class="icon">
                    <i class="fa-solid fa-car fa-lg text-danger"></i>
                </div>
                <div class="detail-box text-danger">
                    <h5>
                        BENGKEL
                    </h5>
                </div>
            </a>
        </div> --}}
    </div>
</div>
</div>
@endsection
