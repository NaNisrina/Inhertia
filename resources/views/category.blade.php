@extends('template')
@section('title', 'Category')

@section('content')

    <div class="container">
        <div class="heading_container heading_center text-danger">
            <h2 class="my-3">
                PILIH KATEGORI
            </h2>
        </div>

        <!-- Search -->
        <input type="text" class="form-control" name="search" id="search" placeholder="Search..." aria-label="search">

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.getElementById("search");
                const categoryContainers = document.querySelectorAll(".col-3");

                searchInput.addEventListener("input", function () {
                    const searchTerm = searchInput.value.toLowerCase();

                    categoryContainers.forEach(function (container) {
                        const categoryText = container.querySelector("h5").textContent.toLowerCase();

                        if (categoryText.includes(searchTerm)) {
                            container.style.display = "block"; // Show matching categories
                        } else {
                            container.style.display = "none";  // Hide non-matching categories
                        }
                    });
                });
            });
        </script>


        {{-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.getElementById("search");
                const categoryContainers = document.querySelectorAll(".col-3");

                searchInput.addEventListener("input", function () {
                    const searchTerm = searchInput.value.toLowerCase();

                    categoryContainers.forEach(function (container) {
                        const h5category = container.querySelector("h5");

                        // Validate existing data
                        const hasH5category = h5category && h5category.textContent;

                        if (hasH5category && h5category.textContent.toLowerCase().includes(searchTerm)) {
                            container.classList.remove("hidden");
                        } else {
                            container.classList.add("hidden");
                        }
                    });
                });
            });
        </script> --}}

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

        </div>
    </div>
    </div>
@endsection
