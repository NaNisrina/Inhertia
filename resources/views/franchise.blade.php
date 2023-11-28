@extends('template')
@section('title', 'Franchise')

@section('content')

    <!-- job section -->
    <section class="job_section layout_padding bg-dark">
        <div class="container">

            <div class="heading_container heading_center">
                <h2>
                    FRANCHISE LIST
                </h2>
            </div>

            <!-- Search -->
            <input type="text" class="form-control" name="search" id="search" placeholder="Search..." aria-label="search">

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById("search");
                    const franchiseContainers = document.querySelectorAll(".job_container");

                    searchInput.addEventListener("input", function() {
                        const searchTerm = searchInput.value.toLowerCase();

                        franchiseContainers.forEach(function(container) {
                            const categoryText = container.querySelector(".job_heading").textContent
                                .toLowerCase();
                            const franchiseBoxes = container.querySelectorAll(".box");

                            let hasMatchingFranchise = false;

                            franchiseBoxes.forEach(function(box) {
                                const franchiseName = box.querySelector("h5").textContent
                                    .toLowerCase();

                                if (franchiseName.includes(searchTerm)) {
                                    box.style.display = "block"; // Show matching franchises
                                    hasMatchingFranchise = true;
                                } else {
                                    box.style.display = "none"; // Hide non-matching franchises
                                }
                            });

                            // If there's a matching franchise in this category, show the category heading
                            container.style.display = hasMatchingFranchise ? "block" : "none";
                        });
                    });
                });
            </script>


            @foreach ($categories as $category)
                @if (count($category->franchise) > 0 || $search)
                    <div class="job_container">

                        <h4 class="job_heading">
                            {{ $category->name }}
                        </h4>

                        <div class="row">

                            @foreach ($category->franchise as $franchise)
                                <div class="col-lg-6">

                                    <div class="box border-light bg-light text-danger shadow">

                                        {{-- <div class="row">
                                            <div class="col-12 text-right">
                                                <i class="fas fa-window-minimize mr-2"></i>
                                                <i class="fas fa-window-restore mr-2"></i>
                                                <i class="fas fa-close"></i>
                                            </div>
                                        </div> --}}

                                        <div class="job_content-box">

                                            <div class="align-middle">
                                                <img src="{{ $franchise->image }}" alt="" class="img_detail"
                                                    style="max-height: 150px">
                                            </div>

                                            <div class="ml-3 detail-box">

                                                <h5 class="h3 mb-5">
                                                    {{ $franchise->name }}
                                                </h5>

                                                <div class="detail-info">
                                                    <h6 class="mb-1">
                                                        <i class="h6 fa-solid fa-location-dot mr-1" aria-hidden="true"></i>
                                                        <span>
                                                            {{ $franchise->alamat }}
                                                        </span>
                                                    </h6>
                                                </div>

                                                <div class="detail-info">
                                                    <h6 class="mb-1">
                                                        <i class="h6 fa-solid fa-dollar-sign mr-2" aria-hidden="true"></i>
                                                        <span>
                                                            {{ number_format($franchise->modal_minimal) }}
                                                        </span>
                                                    </h6>
                                                </div>

                                                {{-- <div class="detail-info">
                                                    <h6 class="mb-1">
                                                        <i class="h6 fa-solid fa-envelope" aria-hidden="true"></i>
                                                        <span>
                                                            {{ $franchise->email }}
                                                        </span>
                                                    </h6>
                                                </div> --}}

                                                {{-- <div class="detail-info">
                                                    <h6 class="mb-1">
                                                        <i class="h6 fa-solid fa-phone" aria-hidden="true"></i>
                                                        <span>
                                                            {{ $franchise->telepon }}
                                                        </span>
                                                    </h6>
                                                </div> --}}

                                            </div>
                                        </div>

                                        <a href="{{ route('franchise.detail', $franchise->slug) }}"
                                            class="btn btn-outline-danger mt-3">
                                            Detail &raquo;
                                        </a>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- end job section -->
@endsection
