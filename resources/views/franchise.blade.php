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
                                    <div class="box bg-light text-primary shadow">

                                        <div class="job_content-box">

                                            <div class="img-box">
                                                <img src="{{ $franchise->image }}" alt="" class="img_detail"
                                                    style="max-height: 100px">
                                            </div>

                                            <div class="detail-box">

                                                <h5>
                                                    {{ $franchise->name }}
                                                </h5>

                                                <div class="detail-info">

                                                    <h6>
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        <span>
                                                            {{ $franchise->alamat }}
                                                        </span>
                                                    </h6>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="option-box">
                                            {{-- <button class="fav-btn">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </button> --}}
                                            <a href="{{ route('franchise.detail', $franchise->slug) }}"
                                                class="btn btn-outline-primary">
                                                Detail &raquo;
                                            </a>
                                        </div>
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
