@extends('template')
@section('title', 'Category')

@section('content')

    <!-- category -->
    <section class="layout_padding bg-dark">
        <div class="container">

            <div class="heading_container heading_center text-light">
                <h2 class="mb-3">
                    CATEGORY
                </h2>
            </div>

            <!-- Search -->
            <input type="text" class="form-control" name="search" id="search" placeholder="Search..." aria-label="search">

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById("search");
                    const categoryContainers = document.querySelectorAll(".col-3");

                    searchInput.addEventListener("input", function() {
                        const searchTerm = searchInput.value.toLowerCase();

                        categoryContainers.forEach(function(container) {
                            const categoryText = container.querySelector("h5").textContent.toLowerCase();

                            if (categoryText.includes(searchTerm)) {
                                container.style.display = "block"; // Show matching categories
                            } else {
                                container.style.display = "none"; // Hide non-matching categories
                            }
                        });
                    });
                });
            </script>

        </div>

        <div class="container text-center py-5">


            <div class="row justify-content-center">

                @foreach ($categories as $category)
                    <div class="col-3 mt-4 mr-3 bg-danger border-danger rounded shadow">
                        <a href="{{ route('franchise', ['category' => $category->slug]) }}" class="box">
                            <div class="icon h1 pt-3">
                                <i class="{{ $category->icon }} fa-lg text-light"></i>
                            </div>
                            <div class="detail-box text-light">
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
    </section>
@endsection
