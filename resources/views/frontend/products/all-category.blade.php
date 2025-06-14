@extends('layouts.app')
@section('pageTitle', 'Products')
@section('content')
    <style>
        .main-breadcrumbs .wt-breadcrumb .b-links {
            color: #80ddff;
             !important;
        }
    </style>
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="site-text-primary text-white ">Products</h1>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/">Home</a></li>
                            <li class="b-links">Products</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        <!-- OUR BLOG START -->
        <div class="section-full  p-t80 p-b50 bg-white">
            <div class="container">

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                            <div class="row">
                                @forelse($productCategories as $pCategory)
                                    <div class="col-lg-4 col-sm-6 col-12 my-3">
                                        <div class="project-img-effect-1 h-100">
                                            <div class="wt-info mt-2 h-100">
                                                <h3 class="wt-tilte  m-b10 m-t0">{{ $pCategory->title }}</h3>
                                                <a href="{{ route('frontend.product.category', $pCategory->slug) }}"
                                                    class="site-button-link">View Products</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                                        <p class="text-center">No Products Found</p>
                                    </div>
                                @endforelse
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $productCategories->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->

    </div>
    <!-- CONTENT END -->
@endsection
