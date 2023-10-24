@extends('template')
@section('title', 'Category')

@section('content')

    <div class="container">
        <div class="heading_container heading_center text-danger">
            <h2 class="my-3">
                PILIH KATEGORI
            </h2>
        </div>
        <input type="text" class="form-control" name="search" id="search" placeholder="Search..." aria-label="search">

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById("search");
                const noteContainers = document.querySelectorAll(".category-container");

                searchInput.addEventListener("input", function() {
                    const searchTerm = searchInput.value.toLowerCase();

                    categoryContainers.forEach(function(container) {
                        const h1category = container.querySelector("#category-icon");
                        const h5category = container.querySelector("#category-name");

                        // Validate exisiting data
                        const hasH1category = h1category && h1category.textContent;
                        const hasH5category = h5category && h5category.textContent;

                        if (
                            (hasH1category && h1category.textContent.toLowerCase().includes(
                            searchTerm)) ||
                            (hasH5category && h5category.textContent.toLowerCase().includes(
                            searchTerm)) ||
                        ) {
                            container.classList.remove("hidden");
                        } else {
                            container.classList.add("hidden");
                        }
                    });
                });
            });
        </script>
    </div>

    <div class="container text-center py-5">
        <div class="row justify-content-center">

            @foreach ($categories as $category)
                <div class="col-3 mt-4 mr-3 bg-warning border rounded">
                    <a href="{{ route('franchise', ['category' => $category->slug]) }}" class="box">
                        <div class="icon h1 pt-3">
                            <i class="{{ $category->icon }} fa-lg text-danger"></i>
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
